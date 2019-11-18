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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/logout' ,'LogoutController@index');
Route::post('/signup' , 'SellerController@store')->name('seller.store');
Route::post('/login', 'LoginVerify@verify');


//seller <
Route::get('/seller', 'SellerController@index')->name('seller.index')->middleware('checklogged');
Route::get('/seller/profile', 'SellerController@profile')->name('seller.profile')->middleware('checklogged');;
Route::get('/seller/profile/edit','SellerController@editview')->name('seller.edit')->middleware('checklogged');;
Route::post('/seller/profile/edit','SellerController@edit');
Route::get('/seller/ticketrequests', 'SellerController@history')->name('seller.history')->middleware('checklogged');
Route::get('/seller/ticketrequests/approve/{id}','SellerController@approve')->name('seller.approve')->middleware('checklogged');
Route::get('/seller/ticketrequests/delete/{id}','SellerController@delete')->name('seller.delete')->middleware('checklogged');
Route::get('/seller/ticketapproved', 'SellerController@sellticket')->name('seller.sellticket')->middleware('checklogged');
Route::get('/seller/ticketapproved/sendtouser/{user}', 'SellerController@send')->name('seller.send')->middleware('checklogged');

Route::get('/seller/searchticket', 'SellerController@searchview')->name('seller.searchticket')->middleware('checklogged');
Route::post('/seller/searchticket', 'SellerController@search');


