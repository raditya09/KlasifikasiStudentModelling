<?php

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

// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::group(['namespace'=>'Frontend'], function()
    {
            Route::resource('/', 'HomeController');
    });

Route::group(['namespace'=>'Backend'], function()
    {
            Route::resource('dashboard', 'DashboardController');
    });

Route::group(['namespace'=>'AdminBackend'], function()
    {
            Route::resource('admin', 'AdminDashboardController');
    });
Auth::routes();