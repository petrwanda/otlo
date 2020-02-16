<?php

Route::group(['namespace' => 'Auca'], function() {
    Route::get('/', 'HomeController@index')->name('auca.dashboard');

     //office route

    Route::get('/office', 'OfficeController@index')->name('office.index');
    Route::get('/office/{id}/edit','OfficeController@edit')->name('office.edit');
    Route::get('/office/{id}/delete','OfficeController@destroy')->name('office.destroy');
    Route::get('/office/create','OfficeController@create')->name('office.create');
    Route::post('/office/create','OfficeController@store')->name('office.store');
    Route::post('/office/update','OfficeController@update')->name('office.update');

     //service route

    Route::get('/service', 'ServiceController@index')->name('service.index');
    Route::get('/service/{id}/edit','ServiceController@edit')->name('service.edit');
    Route::get('/service/{id}/delete','ServiceController@destroy')->name('service.destroy');
    Route::get('/service/create','ServiceController@create')->name('service.create');
    Route::post('/service/create','ServiceController@store')->name('service.store');
    Route::post('/service/update','ServiceController@update')->name('service.update');

     //staff route

    Route::get('/staff', 'StaffController@index')->name('staff.index');
    Route::get('/staff/{id}/edit','StaffController@edit')->name('staff.edit');
    Route::get('/staff/{id}/delete','StaffController@destroy')->name('staff.destroy');
    Route::get('/staff/create','StaffController@create')->name('staff.create');
    Route::post('/staff/create','StaffController@store')->name('staff.store');
    Route::post('/staff/update','StaffController@update')->name('staff.update');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('auca.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('auca.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('auca.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auca.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auca.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('auca.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('auca.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('auca.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('auca.verification.verify');

});