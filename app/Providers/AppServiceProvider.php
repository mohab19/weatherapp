<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Satellite;
use App\Settings;
use App\Radar;
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
        $news       = News::all();
        $radars     = Radar::all();
        $RNRadars   = Radar::all()->random(8);
        $satellites = Satellite::all();
        $settings   = Settings::all();
        
        view()->share('news', $news);
        view()->share('radars', $radars);
        view()->share('RNRadars', $RNRadars);
        view()->share('satellites', $satellites);
        view()->share('settings', $settings);
    }
}
