<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use Illuminate\Support\Facades\View;
use Illuminate\Cache\RateLimiting\Limit;


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
        View::composer('*', function($view)
        {
         $data=Category::Limit(7)->get(); 
         View::share('categories', $data);
        });

        View::composer('*', function($view1)
        {
         $data=Subcategory::all(); 
         View::share('subcategories', $data);
        });
 
 
        View::composer('*', function($view2)
        {
         $data=Childcategory::all(); 
         View::share('childcategories', $data);
        });
    }
}
