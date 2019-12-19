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

Route::resource('/medicine', 'MedicineController', ['except' => 'show']);
Route::resource('/medicine_type', 'MedicineTypeController', ['except' => 'show']);
Route::resource('/manufacturer', 'ManufacturerController', ['except' => 'show']);
Route::get('/', function(){
    return view('index');
});




