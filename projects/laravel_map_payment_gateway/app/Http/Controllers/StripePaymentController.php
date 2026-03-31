<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Stripe\PaymentIntent;
class StripePaymentController extends Controller

{

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripe()

    {

        return view('stripe');

    }

    use Stripe\Stripe;
use Stripe\PaymentIntent;

public function createPaymentIntent()
{
    Stripe::setApiKey(env('STRIPE_SECRET'));

    $paymentIntent = PaymentIntent::create([
        'amount' => 10000,
        'currency' => 'inr',
        'automatic_payment_methods' => [
            'enabled' => true,
        ],
    ]);

    return response()->json([
        'clientSecret' => $paymentIntent->client_secret
    ]);
}
    

public function razorpayOrder()
{
    $api = new \Razorpay\Api\Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

    $order = $api->order->create([
        'receipt' => 'order_rcptid_11',
        'amount' => 10000,
        'currency' => 'INR'
    ]);

    return response()->json($order);
}

    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function stripePost(Request $request)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

           $customer = Stripe\Customer::create(array(

            "address" => [

                    "line1" => "Virani Chowk",

                    "postal_code" => "360001",

                    "city" => "Rajkot",

                    "state" => "GJ",

                    "country" => "IN",

                ],

            "email" => "demo@gmail.com",

            "name" => "Hardik Savani",

            "source" => $request->stripeToken

         ));

  

    Stripe\Charge::create ([

            "amount" => 100 * 100,

            "currency" => "usd",

            "customer" => $customer->id,

            "description" => "Test payment from stripe",

            "shipping" => [

              "name" => "Jenny Rosen",

              "address" => [

                "line1" => "510 Townsend St",

                "postal_code" => "98140",

                "city" => "San Francisco",

                "state" => "CA",

                "country" => "US",

              ],

            ]

    ]); 

    Session::flash('success', 'Payment successful!');
    return back();

}

}