<?php

use App\Http\Controllers\estadoPaqueteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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
Route::get('/ubicaciones', function () {
    return view('ubicaciones');
});
Route::get('/ubications', function () {
    return view('ubicaciones');
});
Route::get('/trabajaConNosotros', function () {
    return view('trabaja');
});
Route::get('/paquetes', function () {
    return view('paquetes');
})->name('paquetes');
Route::get('/choferes', function () {
    return view('choferes');
});
Route::get('/trabaja', function () {
    return view('trabaja');
});

Route::post('/paquete',[estadoPaqueteController::class, 'obtenerEstadoPaquete'])->name('estadoPaquete');
