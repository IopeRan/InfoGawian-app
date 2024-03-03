<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardCompanyController;
use App\Http\Controllers\DashboardRequestController;
use App\Http\Controllers\DashboardUserController;
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


Route::get('/admin/dashboard', [DashboardAdminController::class, 'index']);

Route::resource('/admin/dashboard/user', DashboardUserController::class);

Route::resource('/admin/dashboard/company', DashboardCompanyController::class);

Route::resource('/admin/dashboard/request', DashboardRequestController::class);

Route::middleware(['auth'])->group(function () {
});
