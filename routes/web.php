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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user-list-pdf', 'UserController@exportPdf')->name('users.pdf');

Route::get('user-list-excel', 'UserController@exportExcel')->name('users.excel');

Route::post('import-list-excel', 'UserController@importExcel')->name('users.import.excel');
