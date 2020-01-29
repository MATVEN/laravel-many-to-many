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

Route::get('/employee', 'PostController@index') -> name('employee-index');
Route::get('/employee/create', 'PostController@create') -> name('employee-create');
Route::post('/employee/store', 'PostController@store') -> name('employee-store');

Route::post('/employee/{idemp}/remove/task/{idtsk}', 'ExtraController@removeTaskToEmployee') -> name('employee-remove-task');

Route::get('/employee/{id}/edit', 'PostController@edit') -> name('employee.edit');
Route::post('/employee/{id}/update', 'PostController@update') -> name('employee.update');
Route::get('/employee/{id}/delete', 'PostController@destroy') -> name('employee.delete');

