<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', [
    'uses' => 'VideoController@index',
    'as'   => '/',
    'middleware'=> ['auth']
]);

Route::get('/contact', function () {
    return view('app.pages.contact');
});

/*
# User Routes
*/

Route::group(['prefix' => 'user/'], function () {

    Route::get('/', [
        'uses' => 'UserController@index',
        'as'   => 'user',
        'middleware'=> ['auth']
    ]);

    Route::get('edit', [
        'uses' => 'UserController@edit',
        'as'   => 'user/user',
        'middleware'=> ['auth']
    ]);

    Route::post('update', [
        'uses'      => 'UserController@update',
        'as'        => 'user.update',
        'middleware'=> ['auth']
    ]);

    Route::get('videos', [
        'uses' => 'VideoController@user',
        'as'   => 'view'
    ]);

    Route::get('favourite', [
        'uses' => 'VideoController@favourite',
        'as'   => 'favourite',
        'middleware'=> ['auth']

    ]);

});

Route::group(['prefix' => 'auth/'], function () {

    Route::get('login', function () {
        return view('app.login');
    });

    Route::post('/login', [
        'uses' => 'Auth\AuthController@postLogin',
        'as'   => 'auth.login'
    ]);

    Route::get('register', function () {
        return view('app.register');
    });


    Route::post('register', [
        'uses' => 'Auth\AuthController@postRegister',
        'as'   => 'auth.register'
    ]);


    Route::get('logout', [
        'uses' => 'Auth\AuthController@getLogout',
        'as'   => 'logout'
    ]);

});


Route::get('search', [
    'uses' => 'SearchController@index',
    'as'   => 'search'
]);

Route::group(['prefix' => 'video/'], function () {

    Route::get('create', [
        'uses' => 'VideoController@create',
        'as'   => 'create',
         'middleware'=> ['auth']
    ]);

    Route::post('create', [
        'uses' => 'VideoController@store',
        'as'   => 'create',
        'middleware'=> ['auth']
    ]);

    Route::get('{id}', [
        'uses' => 'VideoController@show',
        'as'   => 'video.category'
    ]);

    Route::get('category/{category}', [
        'uses' => 'VideoController@categories',
        'as'   => 'video.category'
    ]);

    Route::get('/{category}/{id}', [
        'uses' => 'VideoController@show',
        'as'   => 'video'
    ]);

    Route::get('like/{video_id}/{user_id}', [
        'uses' => 'LikeController@postLike',
        'as'   => 'video.like'
    ]);

    Route::get('dislike/{video_id}/{user_id}', [
        'uses' => 'LikeController@postUnLike',
        'as'   => 'video.dislike'
    ]);

    Route::post('favourite', [
        'uses' => 'FavouriteController@favourite',
        'as'   => 'video.favourite'
    ]);

    Route::post('unfavourite', [
        'uses' => 'FavouriteController@unfavourite',
        'as'   => 'video.unfavourite'
    ]);

});

Route::get('/login/{provider}', 'OauthController@getSocialLogin');








































































// Route::get('/', function () {
//     return view('app.index');
// });

// Route::get('/register', function () {
//     return view('app.register');
// });

// Route::get('/login', function () {
//     return view('app.login');
// });

// Route::get('videos/emeka', function () {
//     return view('app.video');
// });

// Route::get('/user/emeka', function () {
//     return view('app.profile');
// });

// Route::get('/player', function () {
//     return view('app.player');
// });

// Route::get('/category', function () {
//     return view('app.category');
// });








