<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return view('calculator');
});
Route::get('/2', function () {
    return view('calculator-hitung-luas');
});
Route::get('/wordpress', function () {
    return view('wordpress');
});
Route::get('/boostrap', function () {
    return view('boostrap');
});

Route::get('/3', function () {
    return view('index');
});