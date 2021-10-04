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
    $cards = config('bonus_Card');
    return view('home', ['comics' => $comics, 'cards' => $cards]);
});

Route::get('/comics', function () {

    return view('comics');
})->name('comics');

Route::get('/comics', function () {

    $comics = config('comics');
    return view('single', ['comics' => $comics]);
})->name('comics');

// ROUTE DINAMICA
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    if ($id >= 0 && $id < count($comics) && is_numeric($id)) {

        $comic = $comics[$id];
        return view('single', ['comics' => $comic]);
    } else {
        abort('404');
    }
})->name('comic');

Route::get('/characters', function () {

    return view('characters');
})->name('characters');
