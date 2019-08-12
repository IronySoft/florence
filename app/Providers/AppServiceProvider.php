<?php

namespace App\Providers;

use App\Address;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Schema::defaultStringLength(191);
        View()->composer('front.includes.footer', function ($view) {
            $view->with('address', Address::all()->where('id','=',1));
        });
//        View::composer('front.includes.footer', function ($view) {
//            $view->with('address', Address::all()->first());
//        });
    }
}
