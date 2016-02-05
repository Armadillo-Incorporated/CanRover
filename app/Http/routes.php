<?php
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

    Route::group(['middleware' => 'auth'], function() {
        Route::resource('albums', 'AlbumsController');
        Route::get('/register', 'Auth\AuthController@showRegistrationForm');
        Route::post('/register', 'Auth\AuthController@register');
    });

    Route::group(['middleware' => 'guest'], function() {
        Route::get('/', 'PagesController@home');

        Route::get('/news', 'PagesController@news');

        Route::get('/report', 'PagesController@report');
    });
});
