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

Route::any('/', 'ListController@show');
//
//Route::group(['prefix' => 'auth', 'as' => 'session.'], function() {
//    /* Social Login */
//    Route::get('google', [
//       'as' => 'google.login',
//       'uses' => 'Auth\AuthController@redirectToProvider'
//    ]);
//    Route::get('google/callback', [
//       'as' => 'google.callback',
//       'uses' => 'Auth\AuthController@handleProviderCallBack'
//    ]);
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
