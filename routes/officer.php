<?php

Route::group(['namespace' => 'Officer'], function() {
    Route::get('/', 'HomeController@index')->name('officer.dashboard');

    //staff route

    Route::get('/staff', 'UpdateStaffController@viewStaff')->name('staffs.index');
    Route::get('/staff/{id}/edit','UpdateStaffController@editStaff')->name('staffs.edit');
    Route::post('/staff/update','UpdateStaffController@updateStaff')->name('staffs.update');


    //  //office route

    Route::get('/office', 'UpdateOfficerController@viewOffice')->name('offices.index');
    Route::get('/office/{id}/edit','UpdateOfficerController@editOffice')->name('offices.edit');
    Route::post('/office/update','UpdateOfficerController@updateOffice')->name('offices.update');


    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('officer.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('officer.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('officer.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('officer.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('officer.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('officer.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('officer.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('officer.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('officer.verification.verify');

});