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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login', function () {
//     return view('welcome');
// })->name('login');

Route::get('/something', '\App\Http\Controllers\SomeController@index');

Route::group(['namespace'=> 'Admin'],function(){
	Route::get('list','IndexController@index')->name('list');
	Route::get('test/{id}','TestController@show')->name('test_show');
});

Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix' => 'v1'],function(){
	Route::get('test','Admin\TestController@create');
});

Route::group(['middleware' => 'checkAge'], function(){
	Route::get('testGet', 'Admin\IndexController@index');
	Route::post('testPost', 'Admin\TestController@index');

});



Auth::routes();


