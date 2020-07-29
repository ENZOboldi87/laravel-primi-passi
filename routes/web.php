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
    return view('home');
})->name('home');

Route::get('/corso/full-time', function () {
    return view('corso');
})->name('sezione-corso');

Route::get('/carriere', function () {
    return view('dopoIlCorso');
})->name('sezione-dopoILcorso');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('sezione-Ppolicy');
