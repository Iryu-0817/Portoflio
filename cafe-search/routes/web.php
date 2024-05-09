<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 検索ページ
Route::get('/cafe-search-1', [\App\Http\Controllers\Search\IndexController::class, 'page1']);
Route::get('/cafe-search-2', [\App\Http\Controllers\Search\IndexController::class, 'page2'])->name('cafe-search-2');  /* ->nameで名前を指定 */
/*Route::get('/cafe-search-2', function () {
    return view('search.cafe-search-2');
})->name('cafe-search-2');*/


Route::get('/cafe-list', [\App\Http\Controllers\Search\IndexController::class, 'page3'])->name('output');   
Route::get('/cafe-list/map', [\App\Http\Controllers\Search\IndexController::class, 'page4'])->name('map-list');   