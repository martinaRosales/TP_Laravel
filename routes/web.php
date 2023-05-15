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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home')->name('home');
Route::view('/video','video')->name('video');
Route::view('/tablaPaginada','tablaPaginada')->name('tabla');
Route::view('/bancoImagenes', 'imgBank')->name('imagenes');