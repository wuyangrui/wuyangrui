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
Route::post('/upload', '\App\Http\Controllers\Admin\TestController@upload');


Route::group(['namespace'=> 'Admin'],function(){
	Route::get('list','IndexController@index')->name('list');
	Route::get('test/{id}','TestController@show')->name('test_show');
	Route::get('iframe','IndexController@iframe');
	Route::get('layuiIm','IndexController@layuiIm');
	Route::get('layuiImQQ','IndexController@layuiImQQ');

	Route::get('kefu2','IndexController@kefu2');
	Route::get('getList','IndexController@getList');
	Route::get('getMembers','IndexController@getMembers');
	Route::get('layiMsgbox','IndexController@layiMsgbox');
	Route::get('layimFind','IndexController@layimFind');
	Route::get('layimChatLog','IndexController@layimChatLog');
	

	Route::get('videoBackground', function(){
		return view('bg_video');
	});


	


});

Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');
});



Route::group(['prefix' => 'v1'],function(){
	Route::get('test','Admin\TestController@create');
	Route::get('testData','Admin\TestController@testData');
});

Route::group(['middleware' => 'checkAge'], function(){
	Route::get('testGet', 'Admin\IndexController@index');
	Route::post('testPost', 'Admin\TestController@index');

});
Route::group(['namespace' => 'Admin'],function(){
	Route::resource('adminTest','TestController');
});

Route::group(['middleware' => 'auth'], function(){
	Route::resource('redisTest','RedisController');
});

Route::group(['namespace' => 'SocketIO'],function(){
	Route::get('socketio/tableData','SocketIOController@tableData');
	Route::get('socketio/kefu','SocketIOController@kefu');
	Route::resource('socketio','SocketIOController');

});

Route::group([],function(){
	Route::get('workerman/index','WorkermanController@index');
	Route::get('workerman/getInit','WorkermanController@getInit');
	Route::resource('workerman','WorkermanController');
});




Auth::routes();


