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
Route::get('registration', 'AuthPageController@register')->name('auth.register');
Route::get('forgot_password', 'AuthPageController@passwordReset')->name('auth.passwordReset');
Route::get('seller_registration', 'AuthPageController@sellerRegistration')->name('auth.sellerRegistration');
Route::get('buyer_registration', 'AuthPageController@buyerRegistration')->name('auth.buyerRegistration');

Route::post('createSeller', 'AuthPageController@createSeller')->name('auth.createSeller');
Route::post('createBuyer', 'AuthPageController@createBuyer')->name('auth.createBuyer');

// Shop Routes
Route::get('thankyou', 'LandingPageController@thankYouPage')->name('landing.thankyou');

Route::group(['prefix' => 'shop'], function () {
    Route::get('/', 'ShoppageController@shopPage')->name('landing.shop');
    Route::get('/{product_name}', 'ShoppageController@productPage')->name('landing.product');
    Route::get('/category/{category_name}', 'ShoppageController@categoryShopPage')->name('landing.categoryShop');
    Route::get('/checkout/{id}', 'ShoppageController@checkoutPage')->name('landing.checkout');
});

// Frontend UI Actions Routes
Route::put('/inspectionupdate/{id}', 'UiActionController@updateinspections')->name('productinspection.update');


//admin routes
Route::group(['middleware' => 'auth'], function () {
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

        Route::group(['prefix' => 'products'], function () {
            Route::get('/', 'Admin\ProductController@index')->name('product.index');
            Route::get('/create', 'Admin\ProductController@create')->name('product.create');
            Route::post('/store', 'Admin\ProductController@store')->name('product.store');
            Route::get('/view/{id}', 'Admin\ProductController@show')->name('product.show');
            Route::get('/edit/{id}', 'Admin\ProductController@edit')->name('product.edit');
            Route::put('/update/{id}', 'Admin\ProductController@update')->name('product.update');
            Route::delete('/delete/{id}', 'Admin\ProductController@delete')->name('product.delete');
        });

        Route::group(['prefix' => 'product-inspections'], function () {
            Route::get('/', 'Admin\ProductInspectionController@index')->name('product_inspection.index');
            Route::get('/create', 'Admin\ProductInspectionController@create')->name('product_inspection.create');
            Route::post('/store', 'Admin\ProductInspectionController@store')->name('product_inspection.store');
            Route::get('/edit/{id}', 'Admin\ProductInspectionController@show')->name('product_inspection.show');
            Route::put('/update/{id}', 'Admin\ProductInspectionController@update')->name('product_inspection.update');
            Route::delete('/delete/{id}', 'Admin\ProductInspectionController@delete')->name('product_inspection.delete');
        });
        
        Route::group(['prefix' => 'product-bids'], function () {
            Route::get('/', 'Admin\ProductBidsController@index')->name('product_bids.index');
            Route::get('/list', 'Admin\ProductBidsController@list')->name('product_bids.list');
            Route::get('/create/{id}', 'Admin\ProductBidsController@create')->name('product_bids.create');
            Route::post('/store', 'Admin\ProductBidsController@store')->name('product_bids.store');
            Route::get('/edit/{id}', 'Admin\ProductBidsController@show')->name('product_bids.show');
            Route::put('/update/{id}', 'Admin\ProductBidsController@update')->name('product_bids.update');
            Route::delete('/delete/{id}', 'Admin\ProductBidsController@delete')->name('product_bids.delete');
        });

        Route::group(['prefix' => 'delivery'], function () {
            Route::get('/', 'Admin\DeliveryController@index')->name('delivery.index');
            Route::get('/onging', 'Admin\DeliveryController@index')->name('delivery.ongoing');
            Route::get('/order', 'Admin\DeliveryController@index')->name('delivery.order');
            Route::get('/create', 'Admin\DeliveryController@create')->name('delivery.create');
            Route::post('/store', 'Admin\DeliveryController@store')->name('delivery.store');
            Route::get('/edit/{id}', 'Admin\DeliveryController@show')->name('delivery.show');
            Route::put('/update/{id}', 'Admin\DeliveryController@update')->name('delivery.update');
            Route::delete('/delete/{id}', 'Admin\DeliveryController@delete')->name('delivery.delete');
        });
    });
});

//admin routes
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'seller'], function () {

        Route::get('dashboard', "Seller\DashboardController@dashboard")->name('seller.dashboard');

    });
});