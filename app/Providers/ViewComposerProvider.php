<?php

namespace App\Providers;

use App\Banner;
use App\Category;
use App\Post;
use App\Product;
use App\Video;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        view()->composer(
            'profile', 'App\Http\ViewComposers\ProfileComposer'
        );

        // Using Closure based composers...
        view()->composer('dashboard', function ($view) {
            //
        });

        view()->composer('example.composer', function ($view) {
            $view->with('latestPosts',  Post::latest()->limit(6)->get());
        });
        view()->composer('frontend.header', function ($view) {     
            
            $headerIndexBanners = Banner::where('status', true)->where('position', 'header')->get();
            
            $view->with('headerCategories',  Category::whereNull('parent_id')->get());
            $view->with('headerIndexBanners',  $headerIndexBanners);           
        });

        view()->composer('frontend.mobile_menu', function ($view) {
            $headerIndexBanners = Banner::where('status', true)->where('position', 'header')->get();
            $view->with('headerCategories',  Category::whereNull('parent_id')->get());
            $view->with('headerIndexBanners',  $headerIndexBanners);
            
        });

        view()->composer('frontend.footer', function ($view) {
            $view->with('footerCategories',  Category::whereNull('parent_id')->get());
        });

        view()->composer('frontend.right_index', function ($view) {            
            
            $view->with('featureVideos',  Video::latest('updated_at')->limit(3)->get());
        });

        view()->composer('frontend.right', function ($view) {

            $agent = new Agent();

            $view->with('featureVideos',  Video::latest('updated_at')->limit(4)->get());

            if (!$agent->isMobile() && !$agent->isTablet()) {
              $rightNews =  Post::publish()->latest('updated_at')->limit(4)->get();
            } else {
                $rightNews = null;
            }

            $view->with('rightNews',  $rightNews);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
