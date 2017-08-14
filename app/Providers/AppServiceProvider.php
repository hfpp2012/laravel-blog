<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $age = Carbon::createFromDate(1993, 7 , 6)->age;

        View::share('age', $age);

        View::share('myname', 'Renato');

        // View::share('auth', Auth::user());
        View::composer('*', function($view) {
            $view->with('auth', Auth::user());
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
