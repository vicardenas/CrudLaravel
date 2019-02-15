<?php

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

Route::middleware('web')->group(function() {

    Route::namespace('Website')->group(function() {
        Route::get('/', 'HomeController@index');
    });

    Route::prefix('administrador')->group(function() {

        Route::namespace('Authentication')->group(function() {
            Route::get('ingresar', ['as' => 'login', 'uses' => 'LoginController@showLoginForm']);
            Route::post('ingresar', ['as' => 'login', 'uses' => 'LoginController@login']);
            Route::get('salir', ['as' => 'logout', 'uses' => 'LoginController@logout']);
        });

        Route::middleware('auth')->namespace('Administrator')->name('admin.')->group(function() {

            Route::get('/', 'DashboardController@index')->name('dashboard');

            Route::resource('usuario', 'UserController');
            Route::resource('articulo', 'ArticleController');
            Route::resource('cuenta', 'AccountController', ['only' => ['index', 'edit', 'update']]);

        });

    });

});