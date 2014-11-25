<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('before' => 'guest'), function(){
  Route::get('/', array('as' => 'get-home', 'uses' => 'GetController@index'));
  Route::post('/', array('as' => 'post-home', 'uses' => 'PostController@index'));
  Route::get('/admin', array('as' => 'get-admin', 'uses' => 'AdminController@index'));
  Route::get('/logout', function(){
    Sentry::logout();
    return Redirect::route('get-home');
  });
  Route::group(array('before' => 'csrf'), function(){
    Route::post('/admin', array('as' => 'post-admin', 'uses' => 'AdminController@post_login'));
  });
});
