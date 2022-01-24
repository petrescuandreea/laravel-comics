<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $comicSeries = config('data.comicSeries');
    return view('pages.homepage', compact('comicSeries'));
}) -> name('homepage');

Route::get('/comic', function () {
    return view('pages.single-page');
}) -> name('single-page');
