<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $comics = config('comics');
    return view('home', ['comics' => $comics]);
});

Route::get('/comics', function () {

    return view('comics');
})->name('comics');

Route::get('/single', function () {

    $comics = config('comics');
    return view('single', ['comics' => $comics]);
})->name('single');
