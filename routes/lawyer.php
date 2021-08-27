<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Lawyers','prefix' => 'lawyers'],function(){
    Route::get('/getLogin','LawyerController@getLogin')->name('lawyers.getLogin');
    Route::post('/login','LawyerController@login')->name('lawyers.login');
    Route::get('/logOut','LawyerController@logOut')->name('lawyers.logOut');
    Route::get('/getRegister','LawyerController@getRegister')->name('lawyers.getRegister');
    Route::get('/getLawyerProfile','LawyerController@getLawyerProfile')->name('lawyers.getLawyerProfile');
    Route::post('/updateLawyerProfile/{id}','LawyerController@updateLawyerProfile')->name('lawyers.updateLawyerProfile');
    Route::get('/booking/{id}','LawyerController@booking')->name('lawyers.booking');
    Route::get('/reservationThatInToday/{id}','LawyerController@reservationThatInToday')->name('lawyers.reservationThatInToday');
    Route::get('/generate-pdf','LawyerController@generatePDF')->name('lawyer.generatePDF');
    Route::get('/deleteReservation/{id}','LawyerController@deleteReservation')->name('lawyers.deleteReservation');
    Route::get('/getChat/{id}','LawyerController@getChat')->name('lawyers.getChat');
    Route::get('/selectUserForChat/{user_id}/{lawyer_id}','LawyerController@selectUserForChat')->name('lawyers.selectUserForChat');
    Route::post('/storeMessageFromLawyerToUserInChat','LawyerController@storeMessageFromLawyerToUserInChat')->name('lawyers.storeMessageFromLawyerToUserInChat');
    Route::get('/lawyerDashboardIndex','LawyerController@lawyerDashboardIndex')->name('lawyers.lawyerDashboardIndex');
    Route::get('/clientInformation/{id}','LawyerController@clientInformation')->name('lawyers.clientInformation');
    Route::get('/changePassword','LawyerController@changePassword')->name('lawyers.changePassword');
    Route::post('/storeLawyerTimeAvailable/{id}','LawyerController@storeLawyerTimeAvailable')->name('lawyers.storeLawyerTimeAvailable');
    Route::get('/deleteAppointmentFromLawyerTimeAvailable/{id}','LawyerController@deleteAppointmentFromLawyerTimeAvailable')->name('lawyers.deleteAppointmentFromLawyerTimeAvailable');

    /*  Start Register Lawyer */
    Route::get('/register1', 'RegisterController@createStep1')->name('signup');
    Route::post('/register1', 'RegisterController@PostcreateStep1');
    Route::get('/register2', 'RegisterController@createStep2');
    Route::post('/register2', 'RegisterController@PostcreateStep2');
    Route::get('/register3', 'RegisterController@createStep3');
    Route::post('/register3', 'RegisterController@PostcreateStep3') -> name('register3');
    Route::post('/remove-image', 'RegisterController@removeImage');
    Route::post('/store', 'RegisterController@store');
    Route::get('/data', 'RegisterController@index');
    /* End Register Lawyer */
});

Route::get('/first_step',function(){
    return view('front.lawyers.first_step');
    
});

Route::get('/second_step',function(){
    return view('front.lawyers.second_step');
    
});

Route::get('/third_step',function(){
    return view('front.lawyers.third_step');
    
});