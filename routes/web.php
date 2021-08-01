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

//landing page routes
Route::get('', 'LandingPageController@homePage')->name('landing.home');
Route::get('about-us', 'LandingPageController@aboutPage')->name('landing.about');
Route::get('privacy-policy', 'LandingPageController@privacyPolicyPage')->name('landing.privacy');
Route::get('contact', 'LandingPageController@contactPage')->name('landing.contact');
Route::get('terms-conditions', 'LandingPageController@termsPage')->name('landing.terms');
Route::get('guide', 'LandingPageController@guidePage')->name('landing.guide');
Route::get('faq', 'LandingPageController@faqPage')->name('landing.faq');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::group(['prefix' => 'admin'], function () {

    Route::get('dashboard', function () {
       return view('admin.dashboard');
    });

    Route::group(['prefix' => 'product-category'], function () {
        Route::get('/', 'Admin\ProductCategoryController@index')->name('product_category.index');
        Route::get('/create', 'Admin\ProductCategoryController@create')->name('product_category.create');
        Route::post('/store', 'Admin\ProductCategoryController@store')->name('product_category.store');
        Route::get('/edit/{id}', 'Admin\ProductCategoryController@show')->name('product_category.show');
        Route::put('/update/{id}', 'Admin\ProductCategoryController@update')->name('product_category.update');
        Route::delete('/delete/{id}', 'Admin\ProductCategoryController@delete')->name('product_category.delete');
    });
});