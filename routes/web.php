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

Route::prefix('customer')->group(function (){
   Route::get('list', function (){
       return view('modules.customer.list');
   });

   Route::get('/customer/add', 'CustomerController@addCustomer')->name('create');

   //Route::post('/customer', 'CustomerController@addCustomer');

   Route::get('customer/{id}/edit', 'CustomerController@editCustomer')->name('edit');

   //Route::post('customer/', 'CustomerController@editCustomer');


   Route::get('/customer/{id}/delete', 'CustomerController@deleteCustomer')->name('delete');

   //Route::post('/customer/', 'CustomerController@deleteCustomer');
});