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

Route::get('/', function()
{
	//return View::make('hello');
	return View::make('mashica');
});

/*
Route::get('users', function()
{
    return View::make('users');
});
*/




Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});


/*
Route::get('mashica', function()
{
	//return View::make('hello');
	return View::make('mashica2');
	//return $name;

});
*/

/*
Route::get('mashica/{name?}', function($name = null)
{
	//return View::make('hello');
	return View::make('mashica2');
	//return $name;

});
*/