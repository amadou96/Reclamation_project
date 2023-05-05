<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
Route::get('login',[AuthController::class,'login_page'])->name('login');


Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'
], function () {
    Route::post('/login',[AuthController::class, 'login'])->name('submit_login');
    Route::middleware('connected')->group(function () {
        // Route::get('auth/dashboard',[AuthController::class,'index'])->name('auth.dashboard');
    });
    // Route::prefix('patients')->group(function () {
    //     Route::get('create',[PatientController::class,'create'])->name('patients_create');
    // });

});

Route::middleware('auth')->group(function () {
    Route::get('auth/dashboard',[AuthController::class,'index'])->name('auth.dashboard');
    Route::prefix('patients')->group(function () {
        Route::get('/',[PatientController::class,'index'])->name('patient');
        Route::get('create',[PatientController::class,'create'])->name('patients_create');
        Route::post('store',[PatientController::class,'store'])->name('patient.store');
    });
    Route::prefix('reclamations')->group(function () {
        Route::get('/',[ReclamationController::class,'index'])->name('reclamation');
        Route::get('create',[ReclamationController::class,'create'])->name('reclamations_create');
        Route::post('store',[ReclamationController::class,'store'])->name('reclamation.store');
    });
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
