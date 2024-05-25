<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Models\CafeSearch;

class IndexController extends Controller
{
    public function page1() {
        return view('search.cafe-search');
    }

    public function page2() {
        return view('search.cafe-search-2');
    }

    public function page3() {
        return view('List.output');
    }

    public function page4() {

        return view('List.map-list');
    }

    public function loginForm() {
        return view('Login.log-in');
        
    }

    public function registerForm() {
        return view('Login.register');
    }


}
