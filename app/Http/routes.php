<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index.index');
});

// Route::get('member/info',[
// 	'uses'=>'MemberController@info',
// 	'as'=>'memberinfo',
// ]);
Route::get('member/info',['uses'=>'MemberController@info']);
Route::get('/index',['as'=>'index/index','uses'=>'IndexController@index']);
Route::get('/about',['as'=>'index/about','uses'=>'AboutController@about']);
Route::get('/service',['as'=>'index/services','uses'=>'ServiceController@service']);
Route::get('/new',['as'=>'index/news','uses'=>'NewController@new']);
Route::get('/contact',['as'=>'index/contact','uses'=>'ContactController@contact']);
Route::get('/index/login',function(){
	return view('login.login');
});
Route::get('/index/register',function(){
	return view('login.register');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});



Route::group(['namespace' => 'Admin'], function(){
	Route::group(['prefix'=>'admin'],function(){
		//Route::get('login/index','LoginController@index');
			 Route::any('login/index',[
			'uses'=>'LoginController@index',
			]);
	});
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
