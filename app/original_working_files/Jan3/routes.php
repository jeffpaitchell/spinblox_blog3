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

/* Make sure you have the 'App::bind' statements in order for your 
repositories to be recognized. */

App::bind('Acme\repositories\SpinBlox_BlogRepository', 'Acme\repositories\Eloquent\EloquentSpinBlox_BlogRepository');

/* Spinblox Blog Routes */

Route::get('create_blog', array('as'=>'new_blog', 'uses'=>'BlogController@create'));

Route::post('store_blog', array('as'=>'store_blog', 'uses'=>'BlogController@store'));

Route::get('blogs/blog/show/{id}', array('as'=>'show_blog', 'uses'=>'BlogController@show'));

Route::get('blogs/blog/show/{id}/edit', array('as'=>'edit_blog', 'uses'=>'BlogController@edit'));

Route::put('/blog/show/{id}/update', array('as'=>'update_blog', 'uses'=>'BlogController@update'));

Route::delete('blog/blog/{id}/destroy', array('as'=>'delete_blog', 'uses'=>'BlogController@destroy'));

/* Main home page route */

Route::get('blogs', array('as'=>'overview', 'uses' => 'BlogController@index'));


Route::get('/', ['as' => 'home', function()
{
	return View::make('hello');
}]);

Route::get('profile', function()
{
	return "Welcome, Your email address is " . Auth::user()->email;
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);














