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

Route::get('/owners', 'OwnersController@getOwners');
Route::get('/owners/add', 'OwnersController@addOwner');
Route::get('/owners/edit/{owner}', 'OwnersController@editOwner')->name('owners.edit');
Route::get('/owners/delete/{owner}', 'OwnersController@deleteOwner')->name('owners.delete');
Route::post('/owners/submit', 'OwnersController@submitOwner')->name('owners.submit');
Route::post('/owners/save', 'OwnersController@saveOwner')->name('owners.save');


Route::get('/cars', 'CarsController@getCars');
Route::get('/car/add', 'CarsController@addCar');
Route::get('/car/edit/{car}', 'CarsController@editCar')->name('car.edit');
Route::get('/car/delete/{car}', 'CarsController@deleteCar')->name('car.delete');
Route::post('/car/submit', 'CarsController@submitCar')->name('car.submit');
Route::post('/car/save', 'CarsController@saveCar')->name('car.save');