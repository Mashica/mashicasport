<?php

Route::get('/', function()
{
	return View::make('mashica');
});




Route::get('zonabici', function(){
	
	$users = User::where('isactive','=',1)->orderBy('name')->get();
	//->where('name','=','Maritza')
	return View::make('athletelist.zonabici')->with('users', $users);


});


Route::get('dashboard', array('before' => 'auth', function()
{
    return View::make('dashboard');
}));



Route::get('/login', function()
{
    return View::make('login');
});
 
Route::post('/login', function()
{
    // Validation later - for now let’s just get the creds
    Auth::attempt( 
        array(
            'email' => Input::get('email'), 
            'password' => Input::get('password')
        ) 
    );
 
    return Redirect::to('dashboard');
});
 


Route::get('/logout', function()
{
    Auth::logout();
    
    return View::make('logout');
});









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
			'users' => array()
		);

	return View::make('tests.test1', $data);
	
	/*
	$view = View::make('tests.test1');
	$view -> greeting = $greeting;
	$view -> sustantivo = $sustantivo;

	return $view;
	*/


	//return View::make('hello');
	//return View::make('mashica');

	//$title = 'An inserted title with array.';
	//$body = 'An inserted body, same.';

	//$posts = DB::insert('INSERT INTO posts (title,body) VALUES(?, ?)', array($title, $body));
	//$posts = DB::insert('INSERT INTO posts (title,body) VALUES(:title, :body)', array($title, $body));
	//$something = DB::select('SELECT title FROM posts WHERE id = 1');
	//dd($posts);
	//return $something[0]->title;

	/*
	$posts = DB::table('posts')
		->where('id','>', 3)
		->where('body', '!=', 'an inserted body coded')
		->orderBy('id','desc')
		->take(2)
		->get();
	dd($posts);
	*/

	/*
	$asdf = User::all();
	
	return View::make('tests.test1')->with(array(
		'users'=> $asdf,
		'greeting' => 'calculated',
		'sustantivo' => 'friend',
		'greetings' => array('nacent', 'findlesome', 'crudgehappenstance')));
	*/

	//$person = Usuario::whereemail1AndPass('richard@mashica.com', 'mashica2')->first();
	
	







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