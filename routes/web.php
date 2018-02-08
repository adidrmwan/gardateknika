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
})->name('home');

Route::get('/home','PageController@home')->name('home');
Route::get('/about','PageController@about')->name('about');
Route::get('/newsandevent','PageController@newsandevent')->name('newsandevent');
Route::get('/contact','PageController@contact')->name('contact');
Route::get('/material_testing','PageController@material_testing')->name('material_testing');
Route::get('/material_characterization','PageController@material_characterization')->name('material_characterization');
Route::get('/nondistructivetest','PageController@nondistructivetest')->name('nondistructivetest');
Route::get('/agriculture','PageController@agriculture')->name('agriculture');
Route::get('/automation_system','PageController@automation_system')->name('automation_system');
Route::get('/Engineering','PageController@Engineering')->name('Engineering');
Route::get('/medicine','PageController@medicine')->name('medicine');
Route::get('/foodtech','PageController@foodtech')->name('foodtech');


// Route::get('/language')