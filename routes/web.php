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

    Route::get('customer/office', 'customerController@viewOfficeCustomer')->name('offices.office');
    Route::get('customer/staff', 'customerController@viewStaffCustomer')->name('staffs.staff');
    Route::get('customer/service', 'customerController@viewServiceCustomer')->name('services.service');


