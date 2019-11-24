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


Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home'
	]);

Route::post('/review',[
'uses' => 'HomeController@reviewShow',
'as' => 'review'
]); 


Route::post('/savedata',[
'uses' => 'HomeController@saveData',
'as' => 'savedata'
]); 

Route::post('/register',[
'uses'=> 'HomeController@postRegister',
'as' => 'postregister'
]);

Route::get('/register',[
'uses'=> 'HomeController@getRegister',
'as' => 'getregister'
]);

Route::get('/login',[
'uses'=> 'HomeController@getLogin',
'as' => 'login'
]);

Route::post('/login',[
'uses'=> 'HomeController@postLogin',
'as' => 'postlogin'
]);

Route::get('/logout',[
'uses'=> 'HomeController@postLogout',
'as' => 'postlogout'
]);


Route::get('/data-list',[
'uses'=> 'HomeController@getList',
'as' => 'getlist',
'middleware' => 'auth'
]);

Route::get('/edit/{firstName}',[
'uses'=> 'HomeController@getEdit',
'as' => 'getedit',
'middleware' => 'auth'
]);

Route::post('/edit/{id}',[
'uses'=> 'HomeController@update',
'as' => 'update',
'middleware' => 'auth'
]);

Route::get('/birthday',[
'uses'=> 'HomeController@birthday',
'as' => 'birthday',
'middleware' => 'auth'
]);


Route::post('results',[
'uses'=> 'SearchController@getResults',
'as' => 'search',
'middleware' => 'auth'
]);

Route::get('results',[
'uses'=> 'SearchController@getResult',
'as' => 'search',
'middleware' => 'auth'
]);


Route::get('/profile/{id}/{firstName}',[
'uses'=> 'HomeController@getProfile',
'as' => 'getprofile',
'middleware' => 'auth'
]);


