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
Route::resource('showcase', 'ShowcaseController');
Route::get('/showcase', 'ShowcaseController@index');

Route::get('/showcase', function () {
    return view('showcase');
});
Route::get('/', function () {
    return view('home');
});
