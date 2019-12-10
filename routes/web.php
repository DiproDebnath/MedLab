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
route::view('new','charts-google');
route::view('new1','index');
route::view('new2','tables-datatables');
route::view('new3','pages-login');
route::view('new4','pages-invoice');
route::view('test','nw.new');
=======
Route::resource('/medicine', 'MedicineController');
Route::view('/manufacturer/create','manufacturer.AddManufacturer');
Route::view('/medicin/type','medicine.AddMedicineType');
Route::get('/', function(){
    return view('index');
});


