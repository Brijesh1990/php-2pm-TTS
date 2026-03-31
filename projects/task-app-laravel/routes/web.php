<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

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

// Home redirects to dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Authentication Routes (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Logout Route (Authenticated Only)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Task Routes (Authenticated Only)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TaskController::class, 'dashboard'])->name('dashboard');
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');
    
    // Additional route to update status
    Route::patch('/tasks/{id}/status', [TaskController::class, 'updateStatus'])->name('tasks.update_status');
    
    Route::delete('/tasks/delete/{id}', [TaskController::class, 'destroy'])->name('tasks.delete');
});
