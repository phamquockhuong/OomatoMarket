<?php 
// 
Route::group(['prefix'=>'admin','namespace'=>'backend','middleware'=>'auth','as'=>'admin'],function(){
    Route::resource('category','CategoryController');
	Route::resources([
    'blog' => 'BlogController',
    'blog_type' => 'Blog_typeController',
    'method' => 'MethodController',
    'features' => 'FeaturesController',
    'contact' => 'ContactController',
    'order' => 'OrderController',
    'promotion' => 'PromotionController',
    'user' => 'UserController',
    'order_detail' => 'Order_detailController',
    'pay' => 'PayController',
    'slide' => 'SlideController',
    'comment_blog' => 'CommentblogController',
    'comment' => 'CommentController',
   
	]);
	Route::resource('product','ProductController');
    Route::resource('menu','MenuController');
    Route::resource('storelocaltion','StorelocaltionController');
    Route::resource('admin','AdminController');
});

Route::get('search1', ['as' => 'search1', 'uses' => 'TimkiemspController@search1']);
?>