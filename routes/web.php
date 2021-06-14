<?php

Route::group(['namespace' => 'LastGrade\CMS\Http\Controllers', 'middleware' => ['web']], function(){
	Route::get('admin', 'DashboardController@index');
	//Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});
