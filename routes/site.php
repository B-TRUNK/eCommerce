<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Site Routes
|--------------------------------------------------------------------------
|
| Here is where you can register site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "site" middleware group. Now create something great!
|
*/












Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
