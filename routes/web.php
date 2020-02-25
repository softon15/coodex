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
Route::post('/owners/submit', 'OwnersController@submitOwner')->name('owners.submit');
Route::post('/owners/save', 'OwnersController@saveOwner')->name('owners.save');