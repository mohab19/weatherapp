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
    Auth::routes();
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
    Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin-login.submit');
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/get_location', 'HomeController@getLocation');
    Route::get('/choose_location/{city}', 'HomeController@index');
    Route::get('/search_city/{city}', 'HomeController@searchCity');
    Route::get('/climate', 'ClimateController@index');
    Route::get('/news', 'NewsController@index');
    Route::get('/radar', 'RadarController@index');
    Route::get('/side', 'HomeController@side');
    Route::group(['middleware' => ['auth:admin']], function () {
        /*** home page admin route ***/
        Route::get('/admin', 'AdminController@index')->name('admin');
        Route::group(['prefix' => 'admin'], function () {
            /*** users routes ***/
            Route::resource('users', 'UserController');
            Route::post('users_search', ['uses' => 'UserController@search', 'as' => 'users_view']);
            Route::get('users/activation/{user}','UserController@activation');
            /*** System routes ***/
            Route::resource('categories', 'CategoryController');
            Route::resource('news', 'NewsController');

        });
    });
});
