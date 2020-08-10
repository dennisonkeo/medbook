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


Route::get('patient', function () {
    return view('admin.patients');
});

Route::get('/', function () {
    return view('admin.login');
});

Route::get('dashboard', function () {
    return view('admin.dashboard3');
});

Route::get('patients', 'PatientController@index')->name('patients');
Route::post('add-patient', 'PatientController@addPatient')->name('add-patient');
Route::get('gender', 'GenderController@index')->name('gender');
Route::post('add-gender', 'GenderController@addGender')->name('add-gender');
Route::get('service', 'ServiceController@index')->name('service');
Route::post('add-service', 'ServiceController@addService')->name('add-service');
