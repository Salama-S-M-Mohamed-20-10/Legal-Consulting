<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admins','prefix' => 'admins'],function(){
    Route::get('/getLogin','AdminController@getLogin')->name('admins.getLogin');
    //Route::post('/ecryptAdminPassword','AdminController@ecryptAdminPassword')->name('admins.ecryptAdminPassword');
    Route::post('/login','AdminController@login')->name('admins.login');
    Route::get('/logOut','AdminController@logOut')->name('admins.logOut');
    Route::get('/index','AdminController@index')->name('admins.index');
    Route::get('/listUsers','AdminController@listUsers')->name('admins.listUsers');
    Route::get('/listLawyers','AdminController@listLawyers')->name('admins.listLawyers');
    Route::get('changeStatus/{id}', 'AdminController@changeStatus') -> name('admin.lawyers.status');
    Route::get('/notifications','AdminController@notifications')->name('admins.notifications');
    Route::get('/profile','AdminController@profile')->name('admins.profile');
    Route::post('/updateAdminProfile/{id}','AdminController@updateAdminProfile')->name('admins.updateAdminProfile');
    Route::get('/profileLawyer/{id}','AdminController@profileLawyer')->name('admins.profileLawyer');
    Route::post('/updateProfileLawyer/{id}','AdminController@updateProfileLawyer')->name('admins.updateProfileLawyer');
    Route::get('/deleteLawyer/{id}','AdminController@deleteLawyer')->name('admins.deleteLawyer');
    Route::get('/profileUser/{id}','AdminController@profileUser')->name('admins.profileUser');
    Route::post('/updateProfileUser/{id}','AdminController@updateProfileUser')->name('admins.updateProfileUser');
    Route::get('/deleteUser/{id}','AdminController@deleteUser')->name('admins.deleteUser');
    Route::get('/changePw','AdminController@changePw')->name('admins.changePw');
    Route::post('/updatePassword/{id}','AdminController@updatePassword')->name('admins.updatePassword');
    Route::get('/delete','AdminController@delete')->name('admins.delete');
    Route::get('/userContacts','AdminController@userContacts')->name('admins.userContacts');
    Route::get('/deleteContacts/{id}','AdminController@deleteContacts')->name('admins.deleteContacts');

    /*Route::get('/getRegister','LawyerController@getRegister')->name('lawyers.getRegister');
    Route::get('/getLawyerProfile','LawyerController@getLawyerProfile')->name('lawyers.getLawyerProfile');
    Route::get('/booking','LawyerController@booking')->name('lawyers.booking');
    Route::get('/getChat','LawyerController@getChat')->name('lawyers.getChat');
    Route::get('/lawyerDashboardIndex','LawyerController@lawyerDashboardIndex')->name('lawyers.lawyerDashboardIndex');
    Route::get('/clientInformation','LawyerController@clientInformation')->name('lawyers.clientInformation');
    Route::get('/changePassword','LawyerController@changePassword')->name('lawyers.changePassword');*/
});
