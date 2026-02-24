<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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

// eccomerce customers routing
Route::get('/',[HomeController::class,'index']);
Route::get('/all-products',[ProductsController::class,'index']);
Route::get('/products-details',[ProductsController::class,'ProductDetails']);
Route::get('/view-cart',[ProductsController::class,'viewCart']);
Route::get('/checkout',[ProductsController::class,'Checkout']);
Route::get('/orders',[ProductsController::class,'Orders']);
// eccomerce admin routing
