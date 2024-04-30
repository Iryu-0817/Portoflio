<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cafe-search-1', [\App\Http\Controllers\Search\IndexController::class, 'page1']);

Route::get('/cafe-search-2', function () {
    return view('search.cafe-search-2');
})->name('cafe-search-2');