<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\About;
use App\Genre;
use View;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
            $view->with('classname_about', About::all());
        });

        View::composer('*', function($view){
            $view->with('classname_genre', Genre::all());
        });
    }
}
