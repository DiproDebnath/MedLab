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

Route::get('/medicines', 'MedicineController@index');
Route::get('/medicine/{id}/edit', 'MedicineController@edit')->name('medicine.edit');
Route::get('/medicine/create', 'MedicineController@create');
Route::post('/medicine/{id}', 'MedicineController@update');
Route::delete('/medicine/{id}', 'MedicineController@destroy')->name('medicine.destroy');
Route::resource('/medicine_type', 'MedicineTypeController', ['except' => 'show']);
Route::resource('/manufacturer', 'ManufacturerController', ['except' => 'show']);
Route::get('/', function(){
    return view('index');
});




