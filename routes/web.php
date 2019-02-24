<?php

//User Routes
// Route::group(array('prefix' => 'Admin'), function()
// // Route::group(['namespace' => 'User'], function()
// {
// Route::get('/','HomeController@index');
// Route::get('post/{post}','PostController@post')->name('post');
// });
//   Route::get('/', function () {
//       return view('user.blog');
// });

//User Routes
 // Route:group(['namespace' => 'User'], function(){
//Route::get('/','User\HomeController@index');
//Route::get('post','User\PostController@index')->name('post');
// });

Route::get('/','User\HomeController@index');
Route::get('post','User\PostController@index')->name('post');

//Admin Routes
Route::get('admin/home', 'Admin\PostController@index')->name('admin.home');
Route::resource('admin/user', 'Admin\UserController');
Route::resource('admin/post', 'Admin\PostController');
Route::resource('admin/tag', 'Admin\TagController');
Route::resource('admin/category', 'Admin\CategoryController');


// Route::prefix('User')->group(function () {
//     Route::get('/','HomeController@index');
//         // Matches The "/admin/users" URL
//     });

// Route::group(['prefix'=>'User'], function(){
//     Route::get('/', 'HomeController@index');
//     //Route::get('connect', ['as' => 'connect', 'uses' = > 'AccountController@connect']);
// });

// Route::prefix('User')->group(function () {
//     Route::get('home', 'HomeController@index');
//         // ->where(['section' => '.*']);
// });
