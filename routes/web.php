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

Route::get('/employee', 'EmployeeController@index') -> name('employee-index');
Route::get('/employee/create', 'EmployeeController@create') -> name('employee-create');
Route::post('/employee/store', 'EmployeeController@store') -> name('employee-store');

Route::post('/employee/{idemp}/remove/task/{idtsk}', 'ExtraController@removeTaskToEmployee') -> name('employee-remove-task');

Route::get('/employee/{id}/edit', 'EmployeeController@edit') -> name('employee.edit');
Route::post('/employee/{id}/update', 'EmployeeController@update') -> name('employee.update');
Route::get('/employee/{id}/delete', 'EmployeeController@destroy') -> name('employee.delete');

Auth::routes();
Route::get('/home', 'HomeController@idex') -> name('home');
