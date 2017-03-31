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



Route::group(['prefix'=>'admin'],function (){
    Route::group(['prefix'=>'comment'],function (){
        Route::get('list','CommentController@getList');
        Route::get('delete/{id}','CommentController@getDelete');
    });

    Route::group(['prefix'=>'client'],function(){
        Route::get('list','ClientController@getList');
    });
});
