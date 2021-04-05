<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
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
Route::view('semail','emails.admin.disapprove_user');
Route::view('check', 'check');
// Route::view('profile','profile');

Route::get('/unauthorize', function () {
    return view('unauthorize');
})->name('unauthorize.user');

Route::get('/', function () {
    return view('frontend.index');
})->name('index');
Route::get('userNameCheck','UserController@usernameCheck')->name('usernameCheck');

Auth::routes();

// Social logins
Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');



Route::get('category/sub_categories','CategoryController@getSubCategories')->name('get.sub_categories');

Route::middleware(['auth','admincheck'])->prefix('dashboard')->group(function(){
   Route::resource('/profile','Admin\AdminController');
   Route::resource('/categories', 'Admin\CategoryController');
   Route::resource('/users', 'Admin\UserController');
   Route::resource('/subcategories', 'Admin\SubCategoryController');
   Route::get('/password', 'ProfileController@password');
//    Route::get('users','AdminController@users');
//    Route::get('user-approve/{id}','UserController@userApproved')->name('user.approved');
});

// usercheck
Route::group(['middleware'=>['auth','specialistcheck','checkuserstatus']],function(){
    Route::resource('specialists', 'SpecialistController');
    Route::resource('services', 'Specialist\ServiceController');
    Route::resource('specialist', 'Specialist\DashboardController');
    Route::get('get_service_request/{id}', 'Specialist\DashboardController@getServiceRequest')->name('get_service_request');
});


Route::group(['middleware'=>['auth','checkuserstatus']],function(){
    Route::get('search', 'HomeController@search')->name('search');
    Route::resource('bids', 'Specialist\BidController');
    Route::post('bid-work-status', 'Specialist\BidController@changeWorkStatus')->name('bid_work_status');
    Route::get('category_specialists/{id}', 'HomeController@category_specialists')->name('category_specialists');
    Route::resource('appointments', 'AppointmentController');
    Route::get('portfolio_setting', 'ProfileController@portfolio')->name('portfolio_setting');
    Route::post('portfolio_images', 'ProfileController@portfolioImages')->name('portfolio_images');    
    Route::post('portfolio_image_delete/{id}', 'ProfileController@deleteImage')->name('portfolio_image_delete');    
    Route::get('sub_categories', 'Specialist\ServiceController@getSubCategories')->name('service.get_subcategories');
    Route::resource('profile', 'ProfileController');
    Route::post('/profile/change_avatar', 'ProfileController@update_avatar');

    Route::get('/change-password', 'ProfileController@password');

    Route::post('/password', 'ProfileController@update_password');

    Route::get('specialist-detail/{id}', 'SpecialistController@getSpecialistDetail')->name('specialist_detail');
    Route::get('specialist-portfolio/{id}', 'SpecialistController@getPortfolio')->name('specialist_portfolio');

    Route::get('portfolio', function () {  return view('frontend.portfolio'); })->name('portfolio');
    Route::get('carousels', function () {  return view('frontend.carousels'); })->name('carousels');
    Route::get('clientRequest', function () {return view('frontend.client_request'); })->name('client_request');
    Route::get('appointment-request/{id}','AppointmentController@create')->name('appointment_request');
    Route::post('store-appointment','AppointmentController@storeAppointment')->name('store.appointment');
    Route::get('getQueryServices','Specialist\ServiceController@getQueryServices')->name('getQueryServices');

    Route::resource('clients', 'ClientController');
    Route::resource('client', 'Client\ClientController');
    Route::resource('servicerequests', 'ServiceRequestController');
    Route::get('sub_categories', 'Client\ClientController@getSubCategories')->name('request.get_subcategories');
    Route::view('client/dashboard','client.index');

    Route::post('add/client/review','AppointmentController@addReview')->name('add.client.review');
    // payemnts 

    Route::get('stripe', 'StripePaymentController@stripe');
    Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');
});