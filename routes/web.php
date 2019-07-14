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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Admin\CompaniesController@index')->name('companies');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('admin/companies', 'Admin\\CompaniesController');
Route::resource('admin/employers', 'Admin\\EmployersController');
Route::post('/create_comment', 'Admin\CompaniesController@create_comment')->name('create_comment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
