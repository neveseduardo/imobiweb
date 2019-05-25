<?php

Auth::routes();
Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index')->name('home');
route::get('/logout', 'Auth\LoginController@logout')->name('logout');
