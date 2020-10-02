<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\City;
use App\News;

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
        $cities     = City::all();
        $news       = News::all();
        $categories = Category::all();

        view()->share('categories', $categories);
        view()->share('news', $news);
        view()->share('cities', $cities);
    }
}
