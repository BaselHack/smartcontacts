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


Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'ContactController@index')->name('backend.dashboard.index');

    Route::get('/contacts', 'ContactController@index')->name('backend.contact.index');
    Route::post('/contacts', 'ContactController@store')->name('backend.contact.store');
    Route::post('/contacts/update/{contact}', 'ContactController@update')->name('backend.contact.update');

    Route::get('/friends', 'FriendController@index')->name('backend.friends.index');
    Route::post('/friends/update', 'FriendController@update')->name('backend.friends.update');

    Route::post('/adminsitrator', 'AdministratorController@index')->name('backend.administrator.index');

});