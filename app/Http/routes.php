<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/companies-list', 'CompanyController@index')->name('company.list');
Route::get('/companies-create', 'CompanyController@create')->name('company.create');
Route::post('/companies-store', 'CompanyController@store')->name('company.store');
Route::get('/companies-show/{company}', 'CompanyController@show')->name('company.show');
Route::delete('/companies-destroy/{company}', 'CompanyController@destroy')->name('company.destroy');
Route::get('/companies-edit/{company}/edit', 'CompanyController@edit')->name('company.edit');
Route::put('/companies-update/{company}', 'CompanyController@update')->name('company.update');


Route::get('/employees-list', 'EmployeController@index')->name('employe.list');
Route::get('/employees-create', 'EmployeController@create')->name('employe.create');
Route::post('/employees-store', 'EmployeController@store')->name('employe.store');
Route::get('/employees-show/{employe}', 'EmployeController@show')->name('employe.show');
Route::delete('/employees-destroy/{employe}', 'EmployeController@destroy')->name('employe.destroy');
Route::get('/employees-edit/{employe}/edit', 'EmployeController@edit')->name('employe.edit');
Route::put('/employees-update/{employe}', 'EmployeController@update')->name('employe.update');