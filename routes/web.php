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
    return view('/auth/login');
});

Auth::routes();
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin')->middleware('superadmin');
Route::get('/dapurpage', 'DapurPageController@index')->name('dapurpage')->middleware('dapurpage');
Route::get('/pesanpage', 'PesanPageController@index')->name('pesanpage')->middleware('pesanpage');
Route::get('/kasirpage', 'KasirPageController@index')->name('kasirpage')->middleware('kasirpage');
//Route::get('/home', 'HomeController@index')->name('home');
