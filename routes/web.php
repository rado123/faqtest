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

Route::get('/faqs', 'FaqController@index');
Route::post('/faqs', 'FaqController@store');
Route::get('/faqs/{faq}', 'FaqController@show');
Route::put('/faqs/{faq}', 'FaqController@update');
Route::delete('/faqs/{faq}', 'FaqController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{any?}', function () {
    return view('layouts.app');
});

