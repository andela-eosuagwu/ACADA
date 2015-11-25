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

Route::group(['prefix' => '/'], function () {

    Route::get('login', function () {
        return view('app.pages.signin');
    });

    Route::get('register', function () {
        return view('app.pages.signup');
    });

    Route::get('/signin', [
        'uses' => 'Auth\AuthController@postSignin',
        'as'   => 'signin'
    ]);

    Route::get('signup', [
        'uses' => 'Auth\AuthController@postSignup',
        'as'   => 'signup'
    ]);


    Route::get('logout', [
        'uses' => 'Auth\AuthController@getLogout',
        'as'   => 'logout'
    ]);

});

Route::get('/contact', function () {
    return view('app.pages.contact');
});


Route::get('search', [
    'uses' => 'SearchController@index',
    'as'   => 'search'
]);

Route::get('create', [
    'uses' => 'VideoController@create',
    'as'   => 'create'
]);

Route::get('createpost', [
    'uses' => 'VideoController@store',
    'as'   => 'createpost'
]);

Route::get('video', [
    'uses' => 'VideoController@index',
    'as'   => 'video'
]);

Route::get('video/{category}', [
    'uses' => 'VideoController@category',
    'as'   => 'video'
]);

Route::get('video/{category}/{id}', [
    'uses' => 'VideoController@show',
    'as'   => 'video'
]);

Route::get('view', [
    'uses' => 'VideoController@user',
    'as'   => 'view'
]);


Route::get('user/{id}', [
    'uses' => 'UserController@index',
    'as'   => 'user'
]);

Route::get('user/edit/{id}', [
    'uses' => 'UserController@edit',
    'as'   => 'user'
]);

Route::post('user/update', [
    'uses' => 'UserController@update',
    'as'   => 'user.update',
    'middleware'=> ['auth']
]);

Route::get('/login/{provider}', 'OauthController@getSocialLogin');
