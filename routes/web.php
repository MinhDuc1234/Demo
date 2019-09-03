<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact-us', 'Pages\\NonAuths\\ContactUsController@index');

Auth::routes();
Route::get('/home', 'Pages\\Auths\\HomeController@index');