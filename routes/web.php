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
Route::get('/material_research','PageController@material_research')->name('material_research');
Route::get('/energetic_materials','PageController@energetic_materials')->name('energetic_materials');
Route::get('/general_equipments','PageController@general_equipments')->name('general_equipments');
Route::get('/enviromental','PageController@enviromental')->name('enviromental');
Route::get('/food_and_agriculture','PageController@food_and_agriculture')->name('food_and_agriculture');
Route::get('/pharmaceuticals','PageController@pharmaceuticals')->name('pharmaceuticals');
