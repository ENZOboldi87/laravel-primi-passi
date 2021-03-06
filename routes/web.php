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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/corso/full-time', function () {
    return view('corso');
})->name('sezione-corso');

Route::get('/carriere', function () {
    return view('dopoIlCorso');
})->name('sezione-dopoILcorso');

Route::get('/lezione-gratuita', function () {
    return view('lezionegratuita');
})->name('sezione-lezioneGratuita');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('sezione-Ppolicy');

Route::get('/faq', function () {

  $faqsLeft = config('faq.faq-list-left');
  $faqsRight = config('faq.faq-list-right');

    return view('faq', [
      'faqs_list_left' => $faqsLeft,
      'faqs_list_right' => $faqsRight
    ]);
})->name('faq');
