<?php
// home
Route::get('/', 'HomeController@index');

// tenancy
Route::get('/tenancy', 'TenancyController@index');

// articles
Route::get('/articles', 'ArticlesController@index');

// auth
Route::get('/auth', 'AuthController@index');
Route::post('/auth/login', 'AuthController@login');
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