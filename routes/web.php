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
   Route::get('index', function (){
       return view('modules.customer.index');
   });

   Route::get('create', function (){
       //hien thi form tao khach hang
   });

   Route::post('store', function (){
       //xu li du lieu tao khac hang thong qua phuong thuc post
   });

   Route::get('{id}/edit', function (){
       //hien thi thong tin chi tiet khach hang co ma dinh danh id
   });

   Route::patch('{id}/update', function (){
       //xu li luu du lieu thong tin khach hang duoc chinh sua thong qua Patch tu form
   });

   Route::delete('{id}', function (){
       //xoa thong tin du lieu khach hang
   });
});