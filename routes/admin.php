<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Dashboard' , 'middleware' => 'guest:admin'], function() {

    Route::get('admin/login', 'DashboardAdmin_Controller@adminLogin')->name('admin.login.form')->middleware('guest:admin');

    Route::post('admin/login', 'DashboardAdmin_Controller@adminverify')->name('admin.post')->middleware('guest:admin');

});


Route::group(['namespace' => 'Dashboard' , 'middleware' => 'auth:admin'], function() {

    Route::get('/admin', 'DashboardAdmin_Controller@admin')->name('admin')->middleware('auth:admin');


    Route::group(['prefix' => '/settings'], function() {

        // /Route::get('shippings/{type}', 'Setting_Controller@chooseShippingMethod') -> name('change.shipping.methods');

    });

});
