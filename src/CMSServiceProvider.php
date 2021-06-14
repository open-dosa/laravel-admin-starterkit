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
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/admin'),
        ], 'views');

	    $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
		
	    $this->loadViewsFrom(__DIR__.'/../resources/views', 'admin');
		
	    //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');

	}
	
	public function register()
	{
	
	    // $this->mergeConfigFrom(
        //      __DIR__.'/../config/contact.php', 'contact'
        // );
	}
}
