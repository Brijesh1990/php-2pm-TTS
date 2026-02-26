@extends('ecomm.admin.layout')
@section('title_name')
::Admin Home page 
@endsection
@section('content')
<main class="flex-1 overflow-auto p-6">
<!-- Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
<div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
<h2 class="text-gray-500 text-sm">Users</h2>
<p class="text-2xl font-bold text-gray-800">1,245</p>
</div>
<div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
<h2 class="text-gray-500 text-sm">Revenue</h2>
<p class="text-2xl font-bold text-gray-800">$12,430</p>
</div>
<div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
<h2 class="text-gray-500 text-sm">Orders</h2>
<p class="text-2xl font-bold text-gray-800">342</p>
</div>
<div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
<h2 class="text-gray-500 text-sm">Feedback</h2>
<p class="text-2xl font-bold text-gray-800">87</p>
</div>
</div>

<!-- Chart Section -->
<div class="bg-white p-6 rounded-lg shadow mb-6">
<h2 class="text-gray-800 font-bold mb-4">Monthly Revenue</h2>
<canvas id="revenueChart" class="w-full h-64"></canvas>
</div>
</main>

@endsection