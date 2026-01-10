<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskHomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\AdminControllerLogin;
use App\Http\Controllers\admin\AdminControllerDashboard;
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
// add task manager routing
Route::get('/', [TaskHomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [RegisterController::class, 'login']);
Route::get('/dashboard', [RegisterController::class, 'dashboard']);
Route::get('/manage-task', [RegisterController::class, 'show']);
// admin routing
Route::get('/admin-login', [AdminControllerLogin::class, 'index']);
Route::get('/admin-login/dashboard', [AdminControllerDashboard::class, 'index']);