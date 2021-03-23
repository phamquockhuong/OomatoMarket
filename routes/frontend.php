<?php 
Route::get('blog','FrontendController@blog')->name('blog');
Route::get('preview/{id?}', ['as' => 'preview', 'uses' => 'FrontendController@preview']);
Route::post('preview/{id?}', ['as' => 'preview', 'uses' => 'FrontendController@postComment']);
Route::post('blog_detail/{id?}',['as' => 'blog_detail','uses' =>'FrontendController@postCommentblog']);
Route::get('store','FrontendController@store')->name('store');
Route::get('search', ['as' => 'search', 'uses' => 'FrontendController@search']);
Route::get('about','FrontendController@about')->name('about');
Route::get('introduct','FrontendController@introduct')->name('introduct');
Route::get('contact','FrontendController@contact')->name('contact');
Route::get('FAQ','FrontendController@FAQ')->name('FAQ');
Route::get('profile/{id?}', ['as' => 'profile', 'uses' => 'FrontendController@profile']);
Route::get('list1/{type?}', ['as' => 'list1', 'uses' => 'FrontendController@list1']);
Route::get('list2/{type?}', ['as' => 'list2', 'uses' => 'FrontendController@list2']);
Route::get('list3/{type?}', ['as' => 'list3', 'uses' => 'FrontendController@list3']);
Route::get('ship','FrontendController@ship')->name('ship');
Route::get('cart/{id?}', ['as' => 'cart', 'uses' => 'FrontendController@cart']);
Route::get('shiping','FrontendController@shiping')->name('shiping');

Route::get('shiping_detail/{id?}', ['as' => 'shiping_detail', 'uses' => 'FrontendController@shiping_detail']);

Route::get('login','FrontendController@login')->name('login');
Route::get('login_error','FrontendController@login_error')->name('login_error');
Route::get('blog_detail/{id?}', ['as' => 'blog_detail', 'uses' => 'FrontendController@blog_detail']);
Route::get('cart_detail/{id?}', ['as' => 'cart_detail', 'uses' => 'FrontendController@cart_detail']);
Route::get('signup','FrontendController@signup')->name('signup');
Route::get('/','FrontendController@index')->name('index');
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'FrontendController@getAddtoCart'
]);
Route::get('add-to-cart2/{id}',[
	'as'=>'themgiohang2',
	'uses'=>'FrontendController@getAddtoCart2'
]);
Route::get('add-to/{id}',[
	'as'=>'themship',
	'uses'=>'FrontendController@getAdd'
]);
Route::get('delete-to-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'FrontendController@getDeletetoCart'
]);
Route::get('delete-all-to-cart/{id}',[
	'as'=>'xoahetgiohang',
	'uses'=>'FrontendController@getDeletealltoCart'
]);
?>