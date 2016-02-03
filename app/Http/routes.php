<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::group(['middleware' => 'guest'], function() {
        Route::get('/', 'PagesController@home');

        Route::get('/news', 'PagesController@news');

        Route::get('/report', 'PagesController@report');
    });

    Route::group(['middleware' => 'auth'], function() {
            // Route::get('/gallery/{album}/upload', 'HomeController@index');
            Route::get('/register', 'Auth\AuthController@showRegistrationForm');
            Route::post('/register', 'Auth\AuthController@register');
    });
});
