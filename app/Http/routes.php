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
Route::get('test',function(){
    return view('admin.test');
}); 












































Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin');

Route::get('admin/logout','AdminController@getLogout');



Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function (){
    Route::group(['prefix'=>'comment'],function (){
        Route::get('list','CommentController@getList');
        Route::get('delete/{id}','CommentController@getDelete');
        Route::post('delete_many','CommentController@postDeleteMany');
    });

    Route::group(['prefix'=>'client'],function(){
        Route::get('list','ClientController@getList');
        Route::get('delete/{id}','ClientController@getDelete');
        Route::post('delete_many','ClientController@getDeleteMany');
    });
    Route::group(['prefix'=>'order'],function(){
        Route::get('list','OrderController@getList');
        Route::get('delete/{id}','OrderController@getDelete');
        Route::post('delete_many','OrderController@postDeleteMany');

        Route::get('edit/{id}','OrderController@getEdit');
         Route::post('edit/{id}','OrderController@postEdit');
    });

      Route::group(['prefix'=>'order_item'],function(){
        Route::get('list/{id}','OrderItemController@getList');
        Route::get('delete/{id}/{order_id}','OrderItemController@getDelete');
          Route::get('edit/{id}','OrderItemController@getEdit');
    });

       Route::group(['prefix'=>'user','middleware'=>'superadminLogin'],function(){
        
        Route::get('add','AdminController@getAdd');
        Route::post('add','AdminController@postAdd');
        Route::get('list','AdminController@getList');
        Route::get('delete/{id}','AdminController@getDelete');
        Route::get('edit/{id}','AdminController@getEdit');
        Route::post('edit/{id}','AdminController@postEdit');
        Route::post('delete_many','AdminController@postDeleteMany');
    });

});
Route::get('index', 'PageController@getIndex');