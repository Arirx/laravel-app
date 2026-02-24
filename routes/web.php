<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\MainController@reviewCheck');

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/review', function () {
//     return view('review');
// });

// Route::post('/review/check', function () {
//     return view('review_check');
// });
