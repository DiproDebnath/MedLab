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
    return view('charts-google');
});
Route::get('/new', function () {
    return view('index');
});
Route::get('/new2', function () {
    return view('pages-invoice');
});
Route::get('/new3', function () {
    return view('pages-login');
});
Route::get('/new4', function () {
    return view('pages-register');
});
Route::get('/new5', function () {
    return view('table-datatables');
});