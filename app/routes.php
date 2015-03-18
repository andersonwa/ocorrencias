<?php

Route::get('/', ['as' => 'home', 'uses' => 'IndexController@index']);

Route::resource('users', 'UserController');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');
