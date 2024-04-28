<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafe-search', [\App\Http\Controllers\Search\IndexController::class, 'index']);