<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use App\Models\Footer;
use App\Models\Quicklink;
use App\Models\Sociallink;
use App\Models\Topbar;
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


        View::composer('*', function($view3)
        {
         $data=Footer::all(); 
         View::share('footer', $data);
        });
 
 
        View::composer('*', function($view4)
        {
         $data=Quicklink::all(); 
         View::share('quicklink', $data);
        });


        View::composer('*', function($view5)
        {
         $data=Sociallink::all(); 
         View::share('sociallink', $data);
        });


        View::composer('*', function($view6)
        {
         $data=Topbar::all(); 
         View::share('topbar', $data);
        });
    }
}
