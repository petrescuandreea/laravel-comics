<?php

use Illuminate\Support\Facades\Route;


// config function 
// Route::get('/', function () {
//     $comicSeries = config('data.comicSeries');
//     return view('pages.homepage', compact('comicSeries'));
// }) -> name('homepage');

Route::get('/', 'HomePageController@homePage') -> name('homepage');
    

Route::get('/comic', function () {
    return view('pages.single-page');
}) -> name('single-page');
