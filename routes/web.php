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



Route::get('login', function () {
    return view('admin.login');
});

Route::post('login', 'AdminController@login')->name('login');
Route::get('logout', 'AdminController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

Route::get('/', 'AdminController@index')->name('dashboard');
Route::get('patients', 'PatientController@index')->name('patients');
Route::post('add-patient', 'PatientController@addPatient')->name('add-patient');
Route::get('gender', 'GenderController@index')->name('gender');
Route::post('add-gender', 'GenderController@addGender')->name('add-gender');
Route::get('service', 'ServiceController@index')->name('service');
Route::post('add-service', 'ServiceController@addService')->name('add-service');
Route::delete('delete-patient/{patient}', 'PatientController@deletePatient')->name('delete-patient');
Route::get('get-patient', 'PatientController@getPatient')->name('get-patient');
Route::post('update-patient', 'PatientController@updatePatient')->name('update-patient');

});
