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
        Route::resource('articles', 'ArticlesController', ['except' => ['index', 'show']]);

        Route::get('/album/{album}/upload', 'AlbumsController@upload');
        Route::post('/album/{album}/photos', 'AlbumsController@addPhotos');
        Route::resource('album', 'AlbumsController', ['except' => ['index', 'show']]);
        Route::resource('album.photos', 'PhotosController', ['except' => ['index', 'show', 'store', 'create']]);
        Route::get('dashboard', 'DashboardController@index');

        Route::get('/register', 'Auth\AuthController@showRegistrationForm');
        Route::post('/register', 'Auth\AuthController@register');
    });

    Route::group(['middleware' => 'guest'], function() {
        Route::get('/articles', 'ArticlesController@index');

        Route::get('/articles/{article}', 'ArticlesController@show');

        Route::get('/album', 'AlbumsController@index');
        
        Route::get('/album/{album}', 'AlbumsController@show');

        Route::get('/album/{album}/photos/{photos}', 'AlbumsController@index');

        Route::get('/', 'PagesController@home');

        Route::get('/news', 'PagesController@news');

        Route::get('/report', 'PagesController@report');

    });
});
