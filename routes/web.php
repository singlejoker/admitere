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
    return view('content');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/insert', 'CustomerController@index');

Route::get('/show', 'CustomerController@show');

Route::post('/store', 'CustomerController@store');

Route::get('/getPDF', 'PDFController@getPDF');

Route::get('/logout',  function () {
   Session::flush();
   return redirect('/');
});
Route::get('/admitere', function () {
    return view('admitere');
});

