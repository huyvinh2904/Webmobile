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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login','AdminController@getLogin');
Route::post('login','AdminController@postLogin');

Route::get('logout','AdminController@getLogout');
Route::get('test',function(){
return view('admin.category.add');
});

/*Route Item*/
Route::group(['prefix'=>'item'],function(){
		Route::get('list','ItemController@getList');
		Route::get('add','ItemController@getAdd');
		Route::get('edit/{id}','ItemController@getEdit');
		Route::post('edit/{id}','ItemController@postEdit');
		Route::post('add','ItemController@postAdd');
		Route::get('delete/{id}','ItemController@getDel');
	});
/*End Route Item*/

/*Route Category*/
Route::group(['prefix'=>'cate'],function(){
		Route::get('list','CategoryController@getList');
		Route::get('add','CategoryController@getAdd');
		Route::get('edit/{id}','CategoryController@getEdit');
		Route::post('edit/{id}','CategoryController@postEdit');
		Route::get('del/{id}','CategoryController@getDel');
		Route::post('add','CategoryController@postAdd');
	});
/*End Route Category*/

/*Route Product*/
Route::group(['prefix'=>'product'],function(){
		Route::get('list','ProductController@getList');
		Route::get('add','ProductController@getAdd');
		Route::get('edit/{id}','ProductController@getEdit');
		Route::post('edit/{id}','ProductController@postEdit');
		Route::get('del/{id}','ProductController@getDel');
		Route::post('add','ProductController@postAdd');
	});
/*End Route Product*/
/*Ajax*/
Route::	group(['prefix'=>'ajax'],function(){
		Route::get('cate/{idMenu}','AjaxController@getCategory');	
	});
/*End*/


