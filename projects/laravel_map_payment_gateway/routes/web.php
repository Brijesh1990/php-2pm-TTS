<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PaymentController;
// use App\Http\Controllers\StripePaymentController;
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

// Route::get('/google-map',[GoogleController::class,'index']);
// // stripe payments gateway
// Route::controller(StripePaymentController::class)->group(function(){
//     Route::get('stripe', 'stripe');
//     Route::post('stripe', 'stripePost')->name('stripe.post');
// });



Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/create-order', [PaymentController::class, 'createOrder']);
Route::post('/payment-success', [PaymentController::class, 'paymentSuccess']);