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

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('admin')->group(function() {
	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
	Route::get('/dashboard','Auth\AdminLoginController@showLoginForm')->name('admin.dashboard');
	
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
