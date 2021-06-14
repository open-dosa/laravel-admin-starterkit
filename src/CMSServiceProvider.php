<?php
//
namespace LastGrade\CMS;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider {
	
	public function boot()
	{
        // $this->publishes([
        //     __DIR__.'/../config/contact.php' => config_path('contact.php'),
		// ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel/admin'),
        ], 'views');

	    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		
	    $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');	

	}
	
}
