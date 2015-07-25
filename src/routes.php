<?php

Route::group(['namespace' => 'Enchance\Bleh\Controllers', 'prefix'=>'blehdemo'], function() {
	// Your route
	Route::get('foo', 'BlehController@foo');
});