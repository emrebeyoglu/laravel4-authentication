<?php

Route::group( [ 'before' => 'non-auth.required' ], function() {

	Route::get('/login','HomeController@login');


	Route::group( [ 'prefix' => '/api/v1' ],function(){

		Route::post('/login','ApiController@login');

	});

});

Route::group( [ 'before' => 'auth.required' ], function() {

	Route::get('/','HomeController@index');

});