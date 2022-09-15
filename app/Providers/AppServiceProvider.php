<?php

namespace App\Providers;

use App\Models\Blogs;
use App\Models\Services;
use Illuminate\Support\Facades\View;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share("webtitle", "Vet Clinic and Petcare System");



        // for displaying blogs in sidebar
        View::composer('components.BlogSidebar', function($sidebarBlogs){
            $sidebarBlogs->with('sidebarBlogs', Blogs::where('status', 1)->where('archive', 0)->inRandomOrder()->limit(5)->get());
        });

        // Landing Page Database Display Lists Below
        View::composer('index', function($services){
            $services->with('services', Services::where('status', 1)->where('archive', 0)->inRandomOrder()->limit(4)->get());
        });

       /*  View::composer('index', function($pets){
            $pets->with('pets', Pets::where('status', 1)->where('archive', 0)->inRandomOrder()->limit(4)->get());
        }); */
        
        View::composer('index', function($blogs){
            $blogs->with('blogs', Blogs::where('status', 1)->where('archive', 0)->orderBy('id', 'desc')->limit(3)->get());
        });

    }
}
