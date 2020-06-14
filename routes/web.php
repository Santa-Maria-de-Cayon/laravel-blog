<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@dashbord_al')->name('admin.index');
});
