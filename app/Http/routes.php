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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'before' => 'LaravelLocalizationRedirectFilter',
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'middleware' => 'web' ],
        'namespace' => 'Index',
    ],
    function()
    {
        Route::get('/', 'IndexController@index');
        Route::get('/login', 'IndexController@login');
        Route::post('/login', 'IndexController@login');
        Route::get('/register', 'IndexController@register');
        Route::get('/tokensale-info', 'IndexController@tokensaleInfo');
        Route::get('/website-disclaimer', 'IndexController@websiteDisclaimer');
    }
);