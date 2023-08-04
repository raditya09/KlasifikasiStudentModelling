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



    Route::middleware(['class:3'])->group(function () {
        // Definisikan rute untuk mahasiswa di sini, misalnya dashboard.
        // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::group(['namespace'=>'Backend'], function()
        {
                Route::resource('dashboard', 'DashboardController');
                Route::resource('profile', 'ProfileController');
        });
    });
    
    Route::middleware(['class:1,2'])->group(function () {
        // Definisikan rute untuk dosen di sini, misalnya halaman admin.
        // Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::group(['namespace'=>'AdminBackend'], function()
        {
                Route::resource('admin', 'AdminDashboardController');
                Route::resource('listuser', 'ListUserController');
        });

    });
Auth::routes();