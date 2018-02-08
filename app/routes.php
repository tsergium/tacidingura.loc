<?php
// api
Route::get('/api/product', 'ApiController@fetchProducts');

// home
Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::get('/faq', 'HomeController@faq');
Route::get('/despre_noi', 'HomeController@about');
Route::get('/termeni_si_conditi', 'HomeController@terms');

// search
Route::get('/search/{keyword}', 'SearchController@index');

// product
Route::get('/product', 'ProductController@index');
Route::get('/product/create', 'ProductController@create');
Route::get('/product/{id}/edit', 'ProductController@edit');
Route::post('/product/store', 'ProductController@store');
Route::post('/product/{id}/update', 'ProductController@update');

// tenancy
Route::get('/tenancy', 'TenancyController@index');

// articles
Route::get('/articles', 'ArticlesController@index');
Route::get('/article/{id}', 'ArticlesController@show');

// auth
Route::get('/auth', 'AuthController@index');
Route::post('/auth/login', 'AuthController@login');
Route::get('/auth/create', 'AuthController@create');
Route::post('/auth/store', 'AuthController@store');
Route::get('/auth/logout', 'AuthController@logout');

// users
Route::get('user', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/store', 'UserController@store');
Route::get('user/{id}', 'UserController@show');
Route::get('user/destroy/{id}', 'UserController@destroy');

// projects
Route::get('projects', 'ProjectController@index');
Route::get('project/create', 'ProjectController@create');
Route::post('project/store', 'ProjectController@store');

// tasks
Route::get('task', 'TaskController@index');
Route::get('task/{id}/project', 'TaskController@index');
Route::get('task/{id}/create', 'TaskController@create');
Route::post('task/{id}/store', 'TaskController@store');
Route::get('task/{id}/show', 'TaskController@show');
Route::get('task/{id}/edit', 'TaskController@edit');
Route::post('task/{id}/update', 'TaskController@update');