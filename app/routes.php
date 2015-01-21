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

App::bind('Acme\repositories\SubscriberRepository', 'Acme\repositories\Eloquent\EloquentSubscriberRepository');

/* Spinblox Blog Routes */

/* Admin Group Routes for the Blog */

Route::group(array('before' => 'auth'), function() {

Route::get('create_blog', array('as'=>'new_blog', 'uses'=>'BlogController@create'));

Route::post('store_blog', array('as'=>'store_blog', 'uses'=>'BlogController@store'));

Route::get('blogs/blog/show/{id}', array('as'=>'show_blog', 'uses'=>'BlogController@show'));

Route::get('blogs/blog/show/{id}/edit', array('as'=>'edit_blog', 'uses'=>'BlogController@edit'));

Route::put('/blog/show/{id}/update', array('as'=>'update_blog', 'uses'=>'BlogController@update'));

Route::delete('blog/blog/{id}/destroy', array('as'=>'delete_blog', 'uses'=>'BlogController@destroy'));

/* List the blogs for the admin */

Route::get('admin_blogs', array('as'=>'admin_overview', 'uses' => 'BlogController@admin_index'));

});

/* End Admin Group Routes for the Blog */

/* Display all the blogs */

Route::get('blogs', array('as'=>'overview', 'uses' => 'BlogController@index'));

/* Routes for registering users for the Spinblox Newsletter */

Route::get('create_subscriber', array('as'=>'new_subscriber', 'uses'=>'SubscriberController@create'));

Route::post('store_subscriber', array('as'=>'store_subscriber', 'uses'=>'SubscriberController@store'));

/* More subscribers Routes */

/* Admin Group Routes for the Subscribers */

Route::group(array('before' => 'auth'), function() {

Route::get('admin_subscribers/admin_subscribers/show/{id}', array('as'=>'show_subscriber', 'uses'=>'SubscriberController@show'));

Route::get('admin_subscribers/admin_subscribers/show/{id}/edit', array('as'=>'edit_subscriber', 'uses'=>'SubscriberController@edit'));

Route::put('/admin_subscribers/show/{id}/update', array('as'=>'update_subscriber', 'uses'=>'SubscriberController@update'));

Route::delete('admin_subscribers/admin_subscribers/{id}/destroy', array('as'=>'delete_subscriber', 'uses'=>'SubscriberController@destroy'));

/* List the subscribers for the admin */

Route::get('admin_subscribers', array('as'=>'subscribers_overview', 'uses' => 'SubscriberController@index'));

});

/* End Admin Group Routes for the Subscribers */

Route::get('/', ['as' => 'home', function()
{
	return View::make('home.main_page');
}]);

Route::get('about', ['as' => 'about', function()
{
	return View::make('home.about');
}]);

Route::get('faq', ['as' => 'faq', function()
{
	return View::make('home.faq');
}]);

Route::get('profile', function()
{
	return "Welcome, Your email address is " . Auth::user()->email;
})->before('auth');

Route::get('login', array('as'=>'admin_login', 'uses' => 'SessionsController@create'));
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController', ['only' => ['index', 'create', 'destroy', 'store']]);














