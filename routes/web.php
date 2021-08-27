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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['namespace' => 'Users'],function(){
    Route::get('/', 'UserController@index')->name('dashboard');
});

/*Route::get('/signIn',function(){
    return view('front.users.signIn');
});*/
Route::group(['namespace' => 'Users','prefix' => 'users'],function(){
    Route::get('/getLogin','UserController@getLogin')->name('users.getLogin');
    Route::post('/login','UserController@login')->name('users.login');
    Route::get('/logOut','UserController@logOut')->name('users.logOut');
    Route::get('/getRegister','UserController@getRegister')->name('users.getRegister');
    Route::post('/storeUser','UserController@storeUser')->name('users.storeUser');
    Route::get('/getContact','UserController@getContact')->name('users.getContact');
    Route::post('/userContact','UserController@userContact')->name('users.userContact');
    Route::get('/userInformation','UserController@userInformation')->name('users.userInformation');
    Route::post('/updateUserInformation','UserController@updateUserInformation')->name('users.updateUserInformation');
    Route::get('/changeUserPassword','UserController@changeUserPassword')->name('users.changeUserPassword');
    Route::post('/updateUserPassword','UserController@updateUserPassword')->name('users.updateUserPassword');
    Route::get('/dateForUser/{id}','UserController@dateForUser')->name('users.dateForUser');
    Route::post('/storeReservation/{id}', 'UserController@storeReservation')->name('users.storeReservation');
    Route::get('/successfulReservation/{lawyer_id}/{dateOfReservation}/{timeForReservation}', 'UserController@successfulReservation')->name('users.successfulReservation');
    Route::get('/deleteReservation/{id}', 'UserController@deleteReservation')->name('users.deleteReservation');
    Route::get('/clientSearch','UserController@clientSearch')->name('users.clientSearch');
    Route::get('/lawyerInfoSearch/{id}', 'UserController@lawyerInfoSearch')->name('users.lawyerInfoSearch');
    Route::get('/specialization','UserController@specialization')->name('users.specialization');
    Route::get('/lawyerWithSpecialization/{specializeName}','UserController@lawyerWithSpecialization')->name('users.lawyerWithSpecialization');
    Route::get('/writeComment','UserController@writeComment')->name('users.writeComment');
    Route::get('/favouriteLawyers/{id}','UserController@favouriteLawyers')->name('users.favouriteLawyers');
    Route::post('/storeFavourite/{id}','UserController@storeFavourite')->name('users.storeFavourite');
    Route::get('/deleteFavourite/{id}','UserController@deleteFavourite')->name('users.deleteFavourite');
    Route::post('/storeMessageFromUserInChat','UserController@storeMessageFromUserInChat')->name('users.storeMessageFromUserInChat');
    //Route::get('/appointmentsFromLawyer','UserController@appointmentsFromLawyer')->name('users.appointmentsFromLawyer');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
