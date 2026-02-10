<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskHomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\admin\AdminControllerLogin;
use App\Http\Controllers\admin\AdminControllerDashboard;
use App\Http\Controllers\admin\AddEmployeeController;
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
Route::post('/', [TaskHomeController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index']);
Route::get('/login', [RegisterController::class, 'login']);
// contact us page routing
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);
// add task from user panel 
Route::post('/contact-us', [ContactController::class, 'store']);
// manage task from admin
Route::get('/dashboard', [TaskHomeController::class, 'dashboard']);
Route::post('/dashboard', [TaskHomeController::class, 'store']);
Route::get('/manage-task', [TaskHomeController::class, 'show']);
// admin routing
Route::get('/admin-login', [AdminControllerLogin::class, 'index']);
Route::get('/admin-login/dashboard', [AdminControllerDashboard::class, 'index']);
Route::get('/admin-login/manage-contact', [ContactController::class, 'show']);
Route::get('/admin-login/manage-contact/{id}', [ContactController::class, 'destroy']);
// add employee
Route::get('/admin-login/add-employee', [AddEmployeeController::class, 'index']);
Route::post('/admin-login/add-employee', [AddEmployeeController::class, 'store']);
Route::get('/admin-login/manage-employee', [AddEmployeeController::class, 'show']);

Route::get('/admin-login/manage-employee/{id}',[AddEmployeeController::class, 'destroy']);

Route::get('/admin-login/edit-employee/{id}', [AddEmployeeController::class, 'edit']);

Route::post('/admin-login/edit-employee/{id}', [AddEmployeeController::class, 'update']);