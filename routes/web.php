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

Route::get('/new', function () {
    return view('newpage');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/testpage','testController@index')->name('testpage');
Route::post('testform','testController@postfunction')->name('testform');
