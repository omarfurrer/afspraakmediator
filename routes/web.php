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

Route::get('/', 'PagesController@getHome');
Route::get('/about-us', 'PagesController@getAboutUs');
Route::get('/contact-us', 'PagesController@getContactUs');
Route::get('/how-it-works', 'PagesController@getHowItWorks');

Auth::routes();

Route::redirect('/admin', '/admin/dashboard', 301);

Route::prefix('admin')->namespace('Admin')->middleware('auth', 'role:admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@getDashboard');
    Route::resource('/content_blocks', 'ContentBlocksController');
    Route::resource('/cities_variables', 'CitiesVariablesController');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/articles', 'ArticlesController');
    Route::resource('/reviews', 'ReviewsController');
    Route::resource('/companies', 'CompaniesController');
});

