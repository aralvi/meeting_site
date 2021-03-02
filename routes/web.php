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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Route::get('appointment', function () {
    return view('frontend.appoinment');
})->name('appointment');

Route::get('portfolio', function () {
    return view('frontend.portfolio');
})->name('portfolio');

Route::get('category/sub_categories','CategoryController@getSubCategories')->name('get.sub_categories');
Auth::routes();

Route::view('test','layouts.admin.admin');
Route::resource('clients', 'ClientController');
Route::resource('specialists', 'SpecialistController');