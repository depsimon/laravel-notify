<?php

namespace DepSimon\LaravelNotify;

use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;
use Session;

class LaravelNotifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-notify.php' => config_path('laravel-notify.php')
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-notify')
        ], 'views');

        $this->mergeConfigFrom(__DIR__.'/../config/laravel-notify.php', 'laravel-notify');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-notify');

        $this->app['view']->composer('laravel-notify::show', function (View $view) {
            $laravelNotifyConfig = config('laravel-notify');

            $laravelShouldNotify = Session::has('laravel-notify');

            $laravelNotify = Session::get('laravel-notify', []);

            $view->with(compact('laravelNotifyConfig'; 'laravelShouldNotify'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}