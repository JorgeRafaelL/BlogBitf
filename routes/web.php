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

//Rutas de usuario
Route::group(['namespace' => 'User'], function() {
	Route::get('/', 'HomeController@index');
	Route::get('publicaciones', 'HomeController@publicaciones')->name('publicaciones');

	Route::get('post/{post}', 'PostController@post')->name('post');

	Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
	Route::get('post/category/{category}', 'HomeController@category')->name('category');

	//Rutas de Vue
	Route::post('getPosts','PostController@getAllPosts');
	Route::post('saveLike','PostController@saveLike');

});


//Rutas del administrador
Route::group(['namespace' => 'Admin'], function() {
	Route::get('admin/home', 'HomeController@index')->name('admin.home');

	//Rutas de usuario
	Route::resource('admin/user', 'UserController');
	//Rutas de rol
	Route::resource('admin/role', 'RoleController');
	//Rutas de permisos
	Route::resource('admin/permission', 'PermissionController');
	//Rutas de post
	Route::resource('admin/post', 'PostController');
	//Rutas de etiqueta
	Route::resource('admin/tag', 'TagController');
	//Rutas de categoría
	Route::resource('admin/category', 'CategoryController');
	//Rutas del administrador autenticado
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
