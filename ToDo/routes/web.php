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

Route::get('/todo','ToDosController@index');
Route::post('/create/todo','ToDosController@store');
Route::get('/delete/todo/{id}','ToDosController@del');
Route::get('/complete/todo/{id}','ToDosController@com');
Route::get('/uncomplete/todo/{id}','ToDosController@uncom');
