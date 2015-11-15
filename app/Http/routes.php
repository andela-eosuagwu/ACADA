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

Route::get('/', function () {
    return view('app.pages.index');
});

Route::get('/', function () {
    return view('app.pages.index');
});

Route::get('/contact', function () {
    return view('app.pages.contact');
});

Route::get('video', function () {
    return "all videos";
});

Route::get('/video/{category}', function ($category) {
    return view('app.pages.category');
});

Route::get('/video/{category}/{id}', function ($category, $id) {
	return view('app.pages.play_video');
});

