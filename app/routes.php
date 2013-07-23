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

Route::get('test', function()
{
	$greeting0 = "colosal";
	$greeting1 = "campy";
	$greeting2 = "jostling";
	$greeting3 = "jumpy";
	$sustantivo = "synopsis";

	/*
	return View::make('tests.test1')->with(array(
		'greeting' => $greeting,
		'sustantivo' => $sustantivo
		));
	*/
	
	
	$data = array(
			'greetings' => array($greeting0, $greeting1, $greeting2, $greeting3),
			'sustantivo' => $sustantivo,
			'greeting' => 'calculated',

		);

	return View::make('tests.test1', $data);
	
	/*
	$view = View::make('tests.test1');
	$view -> greeting = $greeting;
	$view -> sustantivo = $sustantivo;

	return $view;
	*/
});


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