<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use App\Models\Category;

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
        // View::share('key','value');
        View::composer('front-end.includes.header', function($view){
          $view->with('category', Category::Where('publication_status', 1)->get());
        });
    }
}
