<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function createOrder()
    {
        $api = new \Razorpay\Api\Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $order = $api->order->create([
            'receipt' => 'order_'.uniqid(),
            'amount' => 10000, // ₹100 in paise
            'currency' => 'INR'
        ]);

        return response()->json($order);
    }

    public function paymentSuccess(Request $request)
    {
        // You should verify signature here in production
        return response()->json([
            'status' => 'success',
            'data' => $request->all()
        ]);
    }
}