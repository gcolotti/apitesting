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



Route::middleware(['web', 'auth'])->group(function(){

    Route::view('/', 'HomeController@index')->name('root');

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('post', 'PostsController');

    Route::resource('subjet', 'SubjetsController');

    Route::resource('institute', 'InstitutesController');

    Route::resource('user', 'UsersController');

});

Auth::routes();
