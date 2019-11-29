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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('finance', 'FinanceController');

Route::resource('maintenance', 'MaintenanceController');

Route::resource('sales', 'SalesController');

Route::resource('supplier', 'SupplierController');

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');

Route::resource('quotations', 'QuotationsController');

Route::resource('offer', 'OfferController');

Route::resource('product', 'ProductController');

Route::recourse('customer', 'MalfunctionController');
