<?php

// use App\Http\Controllers\AdminBackend\SelectPeriodController;

use App\Http\Controllers\AdminBackend\SelectPeriodController;
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

// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::group(['namespace' => 'Frontend'], function () {
    Route::resource('/', 'HomeController');
});



Route::middleware(['class:3'])->group(function () {
    // Definisikan rute untuk mahasiswa di sini, misalnya dashboard.
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['namespace' => 'Backend'], function () {
        Route::resource('dashboard', 'DashboardController');
        Route::resource('profile', 'ProfileController');
        Route::resource('questionnaire', 'QuestionnaireController')->names('userQuestionnaire');

        // hanya tampilan
        Route::get('instruction', function () {
            return view('backend.questionnaire_instructions');
        })->name('user.instruction');
        Route::get('check-questionnaire', function () {
            return view('backend.not_filled_questionnaire');
        })->name('user.checkFilled');
    });
});

Route::middleware(['class:1,2'])->group(function () {
    // Definisikan rute untuk dosen di sini, misalnya halaman admin.
    // Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::group(['namespace' => 'AdminBackend'], function () {
        Route::resource('admin', 'AdminDashboardController')->names('adminDashboard');
        Route::resource('listuser', 'ListUserController')->names('adminListUser');
        Route::resource('listadmin', 'ListAdminController')->names('adminListAdmin');
        Route::resource('admin-questionnaire', 'AdminQuestionnaireController')->names('adminQuestionnaire');
        Route::resource('admin-result', 'AdminResultController')->names('adminResult');
        Route::resource('admin-period', 'AdminPeriodController')->names('adminPeriod');

        Route::post('/select-period', [SelectPeriodController::class, 'update'])->name('adminSelectPeriod');
        // Route::post('listuser', [UserController::class, 'store']);
    });
});
Auth::routes();
