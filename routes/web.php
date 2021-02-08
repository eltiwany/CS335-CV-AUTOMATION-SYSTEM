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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/personal-information' ,'PersonalInformationsController');
Route::resource('/educational-background' ,'EducationalBackgroundsController');
Route::post('/upload-image', 'PersonalInformationsController@upload_image');