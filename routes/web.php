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


Route::get('/', 'Frontend\FrontendController@home')->name('frontend.home.index');
Route::get('/contact', 'Frontend\FrontendController@contact')->name('frontend.contact.index');

Route::post('/become-a-part', 'Frontend\FrontendController@register')->name('frontend.register.store');



Route::get('/happy-friends', 'Frontend\FrontendController@happy')->name('frontend.makefriend.success');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/contacts', 'Backend\ContactController@index')->name('backend.contact.index');

    Route::get('/contacts/create', 'Backend\ContactController@create')->name('backend.contact.create');

    Route::get('/contacts/edit/{contact}', 'Backend\ContactController@edit')->name('backend.contact.edit');

    Route::post('/contacts', 'Backend\ContactController@store')->name('backend.contact.store');
    Route::post('/contacts/update/{contact}', 'Backend\ContactController@update')->name('backend.contact.update');

    Route::get('/friends', 'Backend\FriendController@index')->name('backend.friends.index');
    Route::post('/friends/update', 'Backend\FriendController@add')->name('backend.friends.add');

    Route::post('/adminsitrator', 'AdministratorController@index')->name('backend.administrator.index');

});