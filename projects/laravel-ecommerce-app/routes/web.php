<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\AddSubCategoryController;
use App\Http\Controllers\admin\AddProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ecommerce customers routing
Route::get('/',[HomeController::class,'index']);
Route::get('/all-products',[ProductsController::class,'index']);
Route::get('/products-details',[ProductsController::class,'ProductDetails']);
Route::get('/view-cart',[ProductsController::class,'viewCart']);
Route::get('/checkout',[ProductsController::class,'Checkout']);
Route::get('/orders',[ProductsController::class,'Orders']);
// ecommerce admin routing
Route::get('/admin-login',[AdminLoginController::class,'index']);
Route::get('/admin-login/dashboard',[AdminDashboardController::class,'index']);
Route::get('/admin-login/add-category',[AddCategoryController::class,'index']);
Route::get('/admin-login/add-subcategory',[AddSubCategoryController::class,'index']);
Route::get('/admin-login/add-products',[AddProductsController::class,'index']);
Route::get('/admin-login/manage-customers',[HomeController::class,'index']);
Route::get('/admin-login/manage-contacts',[AdminDashboardController::class,'showcontacts']);
Route::get('/admin-login/manage-orders',[HomeController::class,'index']);
Route::get('/admin-login/manage-reviews',[HomeController::class,'index']);
Route::get('/admin-login/manage-bills',[HomeController::class,'index']);

