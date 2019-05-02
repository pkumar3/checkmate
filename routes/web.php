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
});

Auth::routes();

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/account', 'HomeController@account')->name('account');
Route::get('/restaurants', 'HomeController@restaurants')->name('restaurants');
Route::get('/example-restaurant', 'HomeController@example_restaurant')->name('example-restaurant');
Route::get('/receipt', 'HomeController@receipt')->name('receipt');
Route::get('/pay', 'HomeController@pay')->name('pay');
Route::post('/thanks', 'HomeController@thanks')->name('thanks');
