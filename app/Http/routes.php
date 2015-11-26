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
    'as'   => '/'
]);




/*
# User Routes   
*/

Route::get('user', [
    'uses' => 'UserController@index',
    'as'   => 'user',
    //'middleware'=> ['auth']
]);

Route::get('user/edit', [
    'uses' => 'UserController@edit',
    'as'   => 'user/user',
    //'middleware'=> ['auth']
]);

Route::post('user/update', [
    'uses'      => 'UserController@update',
    'as'        => 'user.update',
    //'middleware'=> ['auth']
]);


Route::group(['prefix' => 'auth/'], function () {

    Route::get('login', function () {
        return view('app.pages.signin');
    });

    Route::get('register', function () {
        return view('app.pages.signup');
    });

    Route::post('/signin', [
        'uses' => 'Auth\AuthController@postSignin',
        'as'   => 'signin'
    ]);

    Route::post('signup', [
        'uses' => 'Auth\AuthController@postSignup',
        'as'   => 'signup'
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
        'as'   => 'create'
    ]);

    Route::post('create', [
        'uses' => 'VideoController@store',
        'as'   => 'create'
    ]);

    Route::get('/{none}/{title}', [
        'uses' => 'VideoController@show',
        'as'   => 'video'
    ]);

});


