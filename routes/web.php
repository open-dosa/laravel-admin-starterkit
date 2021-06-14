<?php

Route::group(['namespace' => 'LastGrade\CMS\Http\Controllers', 'middleware' => ['web']], function(){
	Route::get('admin/demo', 'DashboardController@index');
	
});
