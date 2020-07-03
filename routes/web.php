<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('vendor.welcome');
});

Route::get('/children', function () {
    return view('vendor.children');
});

Route::get('/adults', function () {
    return view('vendor.adults');
});

Route::get('/gallery', function () {
    return view('vendor.gallery');
});

Route::get('/contact', 'AppController@contact');
Route::post('/contact', ['as'=>'contact' ,'uses'=> 'AppController@contactPost']);

Route::get('/faq', function () {
    return view('vendor.faq');
});

