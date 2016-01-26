<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class JoshCrudGeneratorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

        $this->commands(
        	'App\Console\Commands\JoshCrudCommand',
			'App\Console\Commands\JoshCrudControllerCommand',
			'App\Console\Commands\JoshCrudModelCommand',
			'App\Console\Commands\JoshCrudMigrationCommand',
			'App\Console\Commands\JoshCrudViewCommand',
			'App\Console\Commands\JoshCrudRouteCommand',
            'App\Console\Commands\JoshCrudMenuCommand'
        );

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		//
	}	

}
