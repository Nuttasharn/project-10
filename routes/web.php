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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//temp Admin
Route::get('admin/index','Admin\AdminController@index')->name('admin.index');

//ประเภทงานบริการ
Route::get('admin/category/index','Admin\CategoryController@index')->name('cat.index');


