<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Route::post('admin', 'AdminController@index');
//Route::post('user', 'UserController@index');



Route::get('/',function(){
	return view("index");
});

Route::get('administracion',function(){
	return view("admin.index");
});

Route::get('estudiante',function(){
	return view("user.index");
});


/*
Route::get('/', function () {
    return view('auth.login');
});

Route::get('admin',function(){
	return "<center><p><br/><br/><br/>Aqui tienes que redireccionar a la carpeta del admin isaac.</p></center>";
});

Route::get('user',function(){
return view('user.login');
});

Route::get('user/index',function(){
return view('user.index');
});

Route::get('login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('login', array('uses' => 'HomeController@doLogin'));
Auth::routes();

Route::get('/home', 'HomeController@index');
*/