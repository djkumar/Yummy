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


Route::get('/', 'WelcomeController@welcome');
Route::get('/getcity', 'WelcomeController@getcity');
Route::get('/maps','MapController@index');
Route::post('/maps','MapController@homesearch');
Route::post('/ajaxmaps','MapController@ajaxsearch');
Route::post('/contactform/store','ContactformController@store');
Route::post('/reviewform/store','ListingsreviewsController@store');
Route::get('/brands','BrandsController@userindex' )->name('brands.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','Auth\LoginController@userLogout')->name('user.logout');



Route::get('/edit-profile','HomeController@userprofile' );
Route::get('/my-listings','ListingsController@userindex' );
Route::get('/my-listings/edit/{id}','ListingsController@userlistingedit' );
Route::get('/my-listings/add','ListingsController@userlistingadd' );
Route::get('/my-listings/show/{id}','ListingsController@showlisting' );


Route::get('/pricing-plans','HomeController@pricingplan' );
Route::get('/pricing-plans/buy/{id}','HomeController@pricingplan_buy' );

//admin route for our multi-auth system
Route::post('/saveprofile', 'HomeController@saveprofile');





Route::prefix('admin')->group(function () {



    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //admin password reset routes
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    // Users list

    Route::get('/users','UsersController@index' )->name('admin.users');
        Route::get('/users/add','UsersController@index' )->name('admin.users');
         Route::get('/users/{id}','UsersController@profile' )->name('admin.users');
        Route::get('/users/{id}/show/{list_id}','UsersController@show' )->name('admin.users');

// Brands
         Route::get('/brands','BrandsController@index' )->name('admin.brands.index');
        Route::get('/brands/add','BrandsController@create' )->name('admin.brands.index');
       Route::post('/brands/store','BrandsController@store' )->name('admin.brands.index');
       Route::get('/brands/edit/{id}','BrandsController@edit' )->name('admin.brands.index');
    Route::post('/brands/update/{id}','BrandsController@update' )->name('admin.brands.index');

        Route::get('/brands/destroy/{id}','BrandsController@destroy' )->name('admin.brands.index');



// Categories
          Route::get('/categories','CategoriesController@index' )->name('admin.categories.index');
        Route::get('/categories/add','CategoriesController@create' )->name('admin.categories.index');
     Route::post('/categories/store','CategoriesController@store' )->name('admin.categories.index');
            Route::get('/categories/edit/{id}','CategoriesController@edit' )->name('admin.brands.index');
       Route::post('/categories/update/{id}','CategoriesController@update' )->name('admin.brands.index');

// Listings
          Route::get('/listings','ListingsController@index' )->name('admin.listings.index');
        Route::get('/listings/add','ListingsController@create' )->name('admin.listings.index');
        Route::post('/listings/store','ListingsController@store' )->name('admin.listings.index');
                Route::get('/listings/edit/{id}','ListingsController@edit' )->name('admin.brands.index');
       Route::post('/listings/update/{id}','ListingsController@update' )->name('admin.brands.index');




  Route::get('/subscriptions','SubscriptionsController@index' )->name('admin.listings.index');
        Route::get('/subscriptions/add','SubscriptionsController@create' )->name('admin.listings.index');
        Route::post('/subscriptions/store','SubscriptionsController@store' )->name('admin.listings.index');
                Route::get('/subscriptions/edit/{id}','SubscriptionsController@edit' )->name('admin.brands.index');
       Route::post('/subscriptions/update/{id}','SubscriptionsController@update' )->name('admin.brands.index');
       Route::post('/subscriptions/show/','SubscriptionsController@show' )->name('admin.brands.index'); 
            Route::post('/subscriptions/buy/','SubscriptionsController@buy' )->name('admin.brands.index');

});






