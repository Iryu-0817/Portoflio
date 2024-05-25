<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $findUser = User::where('email', $googleUser->getEmail())->orWhere('google_id', $googleUser->getId())->first();

            if($findUser) {
                // ユーザーが存在する場合はログイン
                $findUser->update9(['google_id' => $googleUser->getId()]);
                Auth::login($findUser);
                return redirect('/home');
            } else {
                // ユーザーが存在しない場合は新規作成
                $newUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => Hash::make(uniqid()), // ランダムなパスワード
                ]);
                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return Redirect::to('/login'); // エラー発生時のリダイレクト先
        }
    }
}
