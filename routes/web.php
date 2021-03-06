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

Route::get('/', function () { return view('index'); })->name('index');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/corporate_website', function () { return view('corporate_website'); })->name('corporate_website');
Route::get('/logo_design', function () {  return view('logo_design'); })->name('logo_design');
Route::get('/privacy_policy', function () {  return view('privacy_policy'); })->name('privacy_policy');
Route::post('/send_contact_email', 'HomeController@sendContactEmail')->name('send_contact_email');
