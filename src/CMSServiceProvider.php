<?php
//
namespace LastGrade\SBAdmin;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider {
	
	public function boot()
	{
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/lastgrade/sbadmin'),
        ], 'views');

	    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		
	    $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');	

	}
	
}
