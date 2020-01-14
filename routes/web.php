<?php

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
    return view('welcome');
});

Route::get('/belajar', function () {
    echo "Belajar PHP. Tulisan ini ditampilkan dari routes";
});

Route::get('/belajar2', function () {
    echo "Dua";
});

Route::get('/belajar3', function () {
    echo "Tiga";
});

Route::get('/about', function () {
    return view('about');
});
