<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'ar');
Route::group(['prefix' => '{language?}'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/get_location', 'HomeController@getLocation');
    Route::get('/choose_location/{city}', 'HomeController@index');
    Route::get('/search_city/{city}', 'HomeController@searchCity');
    Route::get('/climate', 'ClimateController@index');
    Route::get('/news', 'NewsController@index');
    Route::get('/radar', 'RadarController@index');
    Auth::routes();
});
