<?php

Route::group(['namespace' => 'LastGrade\SBAdmin\Http\Controllers', 'middleware' => ['web']], function(){
	Route::name('admin.')->group(function () {
		Route::get('admin/demo/{page}', 'DashboardController@index')->name('demo');
	});
	
});
