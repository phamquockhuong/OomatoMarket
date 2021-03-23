<?php

use Illuminate\Support\Facades\Route;

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
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

// $role = Role::create(['name' => 'writer']);



include('backend.php');
include('frontend.php');





// Accout

Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('edit');
Route::put('/profile/{user}', 'ProfileController@update')->name('update');

Auth::routes();
	Route::resource('role','RoleController');
	Route::resource('userr','UserrController');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\ProfileController@logout');

Route::get('/reset-password', 'Auth\ForgotPasswordController@getFormResetPassword')->name('get.reset.password');
Route::post('/reset-password', 'Auth\ForgotPasswordController@sendCodeResetPassword');

Route::get('/password/reset', 'Auth\ForgotPasswordController@resetPassword')->name('get.link.reset.password');
Route::post('/password/reset', 'Auth\ForgotPasswordController@saveResetPassword');
