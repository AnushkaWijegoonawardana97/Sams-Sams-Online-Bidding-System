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

// Login Flow Tempary Routes
Route::get('newlogin', 'AuthPageController@loginPage')->name('auth.login');
Route::get('registration', 'AuthPageController@register')->name('auth.register');
Route::get('forgot_password', 'AuthPageController@passwordReset')->name('auth.passwordReset');
Route::get('seller_registration', 'AuthPageController@sellerRegistration')->name('auth.sellerRegistration');
Route::get('buyer_registration', 'AuthPageController@buyerRegistration')->name('auth.buyerRegistration');

Route::post('createSeller', 'AuthPageController@createSeller')->name('auth.createSeller');

Route::get('/home', 'HomeController@index')->name('home');

//admin routes
Route::group(['prefix' => 'admin'], function () {

    Route::get('dashboard', "Admin\DashboardController@dashboard")->name('admin.dashboard');

    Route::group(['prefix' => 'product-category'], function () {
        Route::get('/', 'Admin\ProductCategoryController@index')->name('product_category.index');
        Route::get('/create', 'Admin\ProductCategoryController@create')->name('product_category.create');
        Route::post('/store', 'Admin\ProductCategoryController@store')->name('product_category.store');
        Route::get('/edit/{id}', 'Admin\ProductCategoryController@show')->name('product_category.show');
        Route::put('/update/{id}', 'Admin\ProductCategoryController@update')->name('product_category.update');
        Route::delete('/delete/{id}', 'Admin\ProductCategoryController@delete')->name('product_category.delete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('/', 'Admin\ProductController@index')->name('product.index');
        Route::get('/create', 'Admin\ProductController@create')->name('product.create');
        Route::post('/store', 'Admin\ProductController@store')->name('product.store');
        Route::get('/edit/{id}', 'Admin\ProductController@show')->name('product.show');
        Route::put('/update/{id}', 'Admin\ProductController@update')->name('product.update');
        Route::delete('/delete/{id}', 'Admin\ProductController@delete')->name('product.delete');
    });
});
