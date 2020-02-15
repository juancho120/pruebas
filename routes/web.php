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
    return view('welcome');
});

Route::resource('type', 'TypeController')->only(['index', 'show', 'delete']);
Route::resource('laboratory', 'LaboratoryController')->only(['index', 'show', 'delete   ']);
Route::resource('drug', 'DrugController');
Route::resource('batch', 'BatchController');