<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardCompanyController;
use App\Http\Controllers\DashboardCompanyUserController;
use App\Http\Controllers\DashboardRequestController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkerController;
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


Route::get('/admin/dashboard', [DashboardAdminController::class, 'index']);
Route::resource('/admin/dashboard/user', DashboardUserController::class);
Route::resource('/admin/dashboard/company', DashboardCompanyController::class);
Route::resource('/admin/dashboard/request', DashboardRequestController::class);

Route::get('/', [HomeController::class, 'index']);
Route::resource('/company', CompanyController::class);
Route::resource('/worker', WorkerController::class);
Route::resource('/profile', ProfileController::class);

Route::get('/message', [MessageController::class, 'admin']);
Route::get('/message/company', [MessageController::class, 'company']);

Route::get('/menu/company', [DashboardCompanyUserController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'loginApp']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/registration', [AuthController::class, 'registrationApp']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
});
