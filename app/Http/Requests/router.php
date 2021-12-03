<?php

/*...*/

Route::get('/', function() {

	return view('welcome');

});


Route::resource('task','TaskController');

Route::auth();

Route::get('home','HomeController@index');

