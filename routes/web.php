<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Models\Reservation;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/servicess', function () {
    return view('servicess');
});
Route::get('/reviewss', function () {
    return view('reviewss');
});
Route::get('/login', [AuthController::class, 'login_get'])->middleware('dash');
Route::post('/login', [AuthController::class, 'login_post']);
Route::get('/register', [AuthController::class, 'register_get']);
Route::post('/register', [AuthController::class, 'register_post']);
Route::post('/logout', [AuthController::class, 'logout_post']);


Route::get('/services', [ServiceController::class, 'index']);
Route::get('/reviews', [ReviewController::class, 'index']);

Route::middleware('user')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/reservation', [DashboardController::class, 'branches_get']);
    Route::get('/dashboard/reservation/{branch_id}', [DashboardController::class, 'reserve_get']);
    Route::post('/dashboard/reservation/{branch_id}', [ReservationController::class, 'store']);
});

Route::middleware('admin')->group(function() { 
    Route::get('/admin', [AdminController::class, 'index']);
    
    // Branches 
    Route::get('/admin/branches', [AdminController::class, 'branch_get']);
    Route::get('/admin/branches/create', [AdminController::class, 'branch_create']);
    Route::post('/admin/branches/create', [AdminController::class, 'branch_store']);
    Route::get('/admin/branches/{id}/edit', [AdminController::class, 'branch_edit']);
    Route::post('/admin/branches/{id}/edit', [AdminController::class, 'branch_update']);
    Route::post('/admin/branches/{id}/delete', [AdminController::class, 'branch_destroy']);
    
    // Services
    Route::get('/admin/services', [AdminController::class, 'service_get']);
    Route::get('/admin/services/create', [AdminController::class, 'service_create']);
    Route::post('/admin/services/create', [AdminController::class, 'service_store']);
    Route::get('/admin/services/{id}/edit', [AdminController::class, 'service_edit']);
    Route::post('/admin/services/{id}/edit', [AdminController::class, 'service_update']);
    Route::post('/admin/services/{id}/delete', [AdminController::class, 'service_destroy']);
    
    // Reservations
    Route::post('/admin/reservation/{id}/accept', [AdminController::class, 'service_accept']);
    Route::post('/admin/reservation/{id}/cancel', [AdminController::class, 'service_cancel']);




});
