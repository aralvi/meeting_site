<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('frontend.index');
})->name('index');


Auth::routes();
Route::get('category/sub_categories','CategoryController@getSubCategories')->name('get.sub_categories');

Route::group(['middleware'=>['auth']],function(){
    
    Route::get('appointment', function () {
        return view('frontend.appoinment');
    })->name('appointment');
    
    Route::get('specialist-detail/{id}', 'SpecialistController@getSpecialistDetail')->name('specialist_detail');

    Route::get('portfolio', function () {
        return view('frontend.portfolio');
    })->name('portfolio');
    Route::get('carousels', function () {
        return view('frontend.carousels');
    })->name('carousels');
    Route::get('clientRequest', function () {
        return view('frontend.client_request');
    })->name('client_request');
    Route::get('appointment-request/{id}','AppointmentController@create')->name('appointment_request');

    Route::get('getQueryServices','Specialist\ServiceController@getQueryServices')->name('getQueryServices');

    Route::resource('clients', 'ClientController');
    Route::resource('appointments', 'AppointmentController');
    Route::resource('specialists', 'SpecialistController');
    Route::resource('specialist/services', 'Specialist\ServiceController');
    Route::get('sub_categories', 'Specialist\ServiceController@getSubCategories')->name('service.get_subcategories');
    Route::view('specialist/dashboard','specialist.index');
    Route::view('client/dashboard','client.index');
});