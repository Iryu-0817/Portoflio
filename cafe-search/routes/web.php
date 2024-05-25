<?php

use App\Http\Controllers\CafeSearchController;
use App\Models\CafeSearch;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GoogleLoginController;
use Laravel\Socialite\Facades\Socialite;




Route::get('/', function () {
    return view('welcome');
});


// ログインぺージ
Route::get('/login-form', [\App\Http\Controllers\Search\IndexController::class, 'loginForm'])->name('login-form');

Route::get('/register-form', [\App\Http\Controllers\Search\IndexController::class, 'registerForm'])->name('register-form');





// Googleログインのリダイレクトルート
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('login.google');

// Googleコールバックの受け取りルート
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);




// 検索ページ
Route::get('/cafe-search-1', [\App\Http\Controllers\Search\IndexController::class, 'page1'])->name('cafe-search-1');
Route::get('/cafe-search-2', [\App\Http\Controllers\Search\IndexController::class, 'page2'])->name('cafe-search-2');  /* ->nameで名前を指定 */



Route::get('/cafe-list', [\App\Http\Controllers\Search\IndexController::class, 'page3'])->name('output');   
Route::get('/cafe-list',[CafeSearchController::class, 'getCafeInfo','openingHours'])->name('cafe.search');

Route::get('/cafe-list/map', [\App\Http\Controllers\Search\IndexController::class, 'page4'])->name('map-list'); 
  