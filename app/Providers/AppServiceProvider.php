<?php

namespace App\Providers;

use App\Contracts\ICurrencyGetter;
use CBA;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		/**
		 *Info Comment :) 
		 */
		$this->app->bind(ICurrencyGetter::class, function () {
			return new CBA;
		});
	}

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}
}
