<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.homepage');
}) -> name('homepage');

Route::get('/comic', function () {
    return view('pages.single-page');
}) -> name('single-page');
