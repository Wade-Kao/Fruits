<?php

namespace App\Providers;

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
        //
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('zh_TW');
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
        // Schema::defaultStringLength(191);
        view()->share('tel', '0123456789');
        view()->composer(['layouts.*'], function ($view) {
            $view->with('address', '中山路一號');
        });
    }
}
