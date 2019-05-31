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

//Route::get('users/{id}', function($id){
// 	return 'Hello, your identification number is :' .$id ; 
// });

// Route::get('users/{id}/{name}', function($id, $name){
// 	return 'Hello ' .$name .',  your identification number is :' .$id .'!' ; 
// });

Route::get('/phpinfo', function () {
	phpinfo();
});	

//--------------------------------


//home page
Route::get('/','PagesController@index');

Route::get('/about', 'pagesController@about');	


Route::get('/services', 'PagesController@services');

Route::resource('posts','PostController');

