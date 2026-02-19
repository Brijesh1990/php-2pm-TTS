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
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [RegisterController::class, 'login']);
// contact us page routing
Route::get('/contact-us', [ContactController::class, 'index']);
Route::post('/contact-us', [ContactController::class, 'store']);
// add task from user panel 
Route::post('/contact-us', [ContactController::class, 'store']);
// manage task from admin
Route::get('/dashboard', [TaskHomeController::class, 'shwall']);
Route::post('/dashboard', [TaskHomeController::class, 'store']);
Route::get('/dashboard/{id}', [TaskHomeController::class, 'destroy']);
Route::get('/dashboard/edit-task/{id}', [TaskHomeController::class, 'edit']);
Route::post('/dashboard/edit-task/{id}', [TaskHomeController::class, 'update']);
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

// manage all task 
Route::get('/admin-login/manage-task', [TaskHomeController::class, 'shwtask']);
Route::get('/admin-login/manage-task/{id}', [TaskHomeController::class, 'destroy_data']);
// manage all registered users in admin
Route::get('/admin-login/manage-users', [RegisterController::class, 'manageuser']);
Route::get('/admin-login/manage-users/{id}', [RegisterController::class, 'destroy']);