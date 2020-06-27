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

		$this->publishes([__DIR__ .'/js'  => base_path('public')]);
		$this->publishes([__DIR__ .'/css' => base_path('public')]);

	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {

	}

	public function provides() {

	}

}
