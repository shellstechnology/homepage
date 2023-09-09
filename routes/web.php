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
    return view('homepage');
});
Route::get('/homepageEn', function () {
    return view('homepageEn');
});
Route::get('/presentacion', function () {
    return view('presentacion');
});
Route::get('/presentation', function () {
    return view('presentation');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/loginEn', function () {
    return view('loginEn');
});
