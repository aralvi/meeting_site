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
    
    Route::get('portfolio', function () {
        return view('frontend.portfolio');
    })->name('portfolio');

    Route::resource('clients', 'ClientController');
    Route::resource('specialists', 'SpecialistController');
    Route::view('specialist/dashboard','specialist.index');
    Route::view('client/dashboard','client.index');
});