<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Main@index');
Route::post('/cadastrar','Main@createOrUpdateProduct')->name('createorupdate');
Route::get('/editar/{id?}','Main@editUserFind')->name('editar');
Route::get('/loadados','Main@loadDados')->name('loadados');
Route::post('/delete','Main@delete')->name('delete');