<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
/*Route::get('/', function(){
	return dd(Auth::check());
});*/
Route::group(['prefix'=>'shop'],function(){
	Route::get('/',['as'=>'shop','uses'=>'ShopController@index']);
});
Route::get('shop/{product}/{price}','ShopController@index');
Route::get('home','WelcomeController@index');
//add some comments
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


