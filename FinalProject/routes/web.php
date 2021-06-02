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


Route::get('/', function () {
    return view('welcome');
});
// Login
 Route::get('login','LoginController@index')->name('logi');
 Route::post('login','LoginController@postLogin')->name('lo');
 // Home
 Route::get('home','HomeController@index')->name('ho');
 // Log Out
 Route::post('logout','LoginController@logOut')->name('logout');
 // Detail Post
 Route::get('detail/{id}','DetailController@viewIndex')->name('dc');
 Route::post('detail/{id}','DetailController@postComment')->name('pc');
 // Register Account
 Route::get('register','RegisterController@index')->name('regis');
 Route::post('register','RegisterController@postRegister')->name('re');
 // Forget Password
 Route::get('getPassword','GetPasswordController@index')->name('getPass');
 Route::post('getPassword','GetPasswordController@postGetPass')->name('ge'); 
 // Admin User
 Route::group(['middleware' =>'AdminRole'],function(){
 Route::get('adminUser','AdminController@index')->name('ad');
 Route::post('add','AdminController@getUser')->name('gu');
Route::get('delete/{id}','AdminController@deleteUser')->name('du');
Route::get('edit/{id}','AdminController@viewIndex')->name('vei');
Route::post('edit/{id}','AdminController@updateUser')->name('updateU');
});
// Admin Post
Route::group(['middleware' =>'AdminRole'],function(){
 Route::get('adminPost','AdminController@indexPost')->name('ap');
 Route::post('addPost','AdminController@getPost')->name('gp');
 Route::get('deletePost/{id}','AdminController@deletePost')->name('dp');
 Route::get('editPost/{id}','AdminController@viewPost')->name('vip');
 Route::post('editPost/{id}','AdminController@updatePost')->name('updateP');
});
 // Admin Comment
 Route::group(['middleware' =>'AdminRole'],function(){
    Route::get('adminComment','AdminController@indexComment')->name('ac');
    Route::post('addComments','AdminController@getComment')->name('gc');
    Route::get('deleteComment/{id}','AdminController@deleteComment')->name('dct');
    Route::get('editComment/{id}','AdminController@viewComment')->name('vc');
    Route::post('editComment/{id}','AdminController@updateComment')->name('updateC');
 });

