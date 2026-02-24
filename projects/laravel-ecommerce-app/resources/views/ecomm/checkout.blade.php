@extends('ecomm.layout')
@section('title_name')
::Checkout
@endsection
@section('content')
<section class="min-h-screen">
  <div class="max-w-7xl mx-auto px-4 py-10">

    <h1 class="text-3xl font-bold text-gray-900 mb-8">
      Checkout
    </h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

      <!-- LEFT : ADDRESS FORM -->
      <div class="lg:col-span-2 space-y-6">

        <div class="bg-white rounded-2xl shadow p-6 space-y-4">
          <h2 class="text-xl font-semibold">Delivery Address</h2>

          <div class="grid md:grid-cols-2 gap-4">
            <input class="border p-3 rounded-xl w-full" placeholder="Full Name">
            <input class="border p-3 rounded-xl w-full" placeholder="Mobile Number">
          </div>

          <input class="border p-3 rounded-xl w-full" placeholder="Street Address">

          <div class="grid md:grid-cols-3 gap-4">
            <input class="border p-3 rounded-xl w-full" placeholder="City">
            <input class="border p-3 rounded-xl w-full" placeholder="State">
            <input class="border p-3 rounded-xl w-full" placeholder="Pincode">
          </div>

          <textarea class="border p-3 rounded-xl w-full" placeholder="Delivery Instructions"></textarea>
        </div>

        <!-- PAYMENT -->
        <div class="bg-white rounded-2xl shadow p-6 space-y-4">
          <h2 class="text-xl font-semibold">Payment Method</h2>

          <label class="flex items-center gap-3 border p-3 rounded-xl cursor-pointer">
            <input type="radio" name="payment">
            Cash on Delivery
          </label>

          <label class="flex items-center gap-3 border p-3 rounded-xl cursor-pointer">
            <input type="radio" name="payment">
            UPI / Cards / Net Banking
          </label>
        </div>

      </div>

      <!-- RIGHT : ORDER SUMMARY -->
      <div class="space-y-6">

        <div class="bg-white rounded-2xl shadow p-6 space-y-4">

          <h2 class="text-xl font-semibold">Order Summary</h2>

          <div class="flex justify-between text-gray-600">
            <span>Subtotal</span>
            <span>₹162</span>
          </div>

          <div class="flex justify-between text-gray-600">
            <span>Delivery</span>
            <span>₹10</span>
          </div>

          <div class="flex justify-between text-gray-600">
            <span>Discount</span>
            <span class="text-green-600">-₹20</span>
          </div>

          <hr>

          <div class="flex justify-between font-bold text-lg">
            <span>Total</span>
            <span>₹152</span>
          </div>

          <a href='/orders'><button class="w-full bg-green-600 text-white py-4 rounded-2xl font-semibold hover:bg-green-700 transition">
            Place Order
          </button></a>

        </div>

        <!-- DELIVERY INFO -->
        <div class="bg-white rounded-2xl shadow p-6 text-sm text-gray-600">
          Delivery in 10–15 minutes 🚀
        </div>

      </div>

    </div>

  </div>
</section>
@endsection