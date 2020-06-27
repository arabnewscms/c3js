<?php
namespace Phpanonymous\C3JS;

use Illuminate\Support\ServiceProvider;

class C3JSProvider extends ServiceProvider {

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */

	public function boot() {

		//	if (!file_exists(base_path('config').'/itconfiguration.php')) {
		$this->publishes([__DIR__ .'/js'  => base_path('public')]);
		$this->publishes([__DIR__ .'/css' => base_path('public')]);
		//}

	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		//$this->app->make('Phpanonymous\C3JS\C3JSProvider');
		//$this->app->make('Phpanonymous\C3JS\C3js');
	}

	public function provides() {

	}

}
