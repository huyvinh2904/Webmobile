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



Route::get('test',function(){
return view('admin.category.add');
});


Route::get('gioithieu','PageController@getGioithieu');

Route::get('lienhe','PageController@getLienhe');

	
/*Ajax*/
Route::	group(['prefix'=>'ajax'],function(){
		Route::get('cate/{idMenu}','AjaxController@getCategory');	
	});
/*End*/

Route::get('checkout','PageController@getCheckout');
Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin');

Route::get('admin/logout','AdminController@getLogout');





  
  
  
  
  
/*Ajax*/
Route::	group(['prefix'=>'ajax'],function(){
		Route::get('cate/{idMenu}','AjaxController@getCategory');	
	});
/*End*/


Route::get('admin/login','AdminController@getLogin');
Route::post('admin/login','AdminController@postLogin');

Route::get('admin/logout','AdminController@getLogout');



Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function (){
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


    Route::group(['prefix'=>'comment'],function (){
        Route::get('list','CommentController@getList');
        Route::get('delete/{id}','CommentController@getDelete');
        Route::post('delete_many','CommentController@postDeleteMany');
    });

    Route::group(['prefix'=>'client'],function(){
        Route::get('list','ClientController@getList');
        Route::get('delete/{id}','ClientController@getDelete');
        Route::post('delete_many','ClientController@getDeleteMany');
        Route::get('detail/{id}','ClientController@getDetail');
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

Route::get('index', 'PageController@getIndex1');
Route::get('myaccount/{id}', 'PageController@getAccount')->middleware('clients');
Route::get('myorder/{id}', 'PageController@getMyorder')->middleware('clients');
Route::get('EditMyaccount/{id}', 'PageController@Edit')->middleware('clients');
Route::post('PostEditAccount/{id}','PageController@postEdit')->middleware('clients');

Route::get('list-product/{id}','PageController@getListByCategory');
Route::get('all-list/{id}','PageController@getListByItem');
Route::get('detail/{id}','PageController@getDetail');
Route::get('detail_cart','PageController@getDetailCart');


Route::get('index1', 'HomeController@getIndex1');


Route::get('testsession1', 'PageController@setSession');
Route::get('testsession2', 'PageController@getSession');
Route::get('addCategory/{id}/{qty}', 'AjaxController@addCategory');
Route::get('add-cart-detail', 'AjaxController@addCartDetail');
Route::get('update-cart-detail/{number}','AjaxController@updateCartDetail');
Route::get('update-mini-cart','AjaxController@updateMiniCart');
Route::get('down-qty-cart/{number}','AjaxController@downQtyCart');
Route::get('up-qty-cart/{number}','AjaxController@upQtyCart');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('login','Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');
Route::get('register','Auth\AuthController@getRegister');
Route::post('register','Auth\AuthController@postRegister');
Route::get('logout','PageController@getLogout');




Route::get('testclose', 'PageController@testClose');

Route::get('verify/{code_active}','ClientController@getConfirm');
