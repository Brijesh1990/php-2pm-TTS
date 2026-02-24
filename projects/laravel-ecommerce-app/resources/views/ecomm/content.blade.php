@extends('ecomm.layout')
@section('title_name')
::Home Page
@endsection
@section('content')
<section id="clickIt-content"  class="mt-0 p-5">
<div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-3 md:grid-cols-3">
<div class="p-3 m-3">
<a href="/all-products"><img src="{{ asset('assets/customer/images/babycare-WEB.avif')}}" class="w-full"></a>
</div>
<div class="p-3 m-3">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Pet-Care_WEB.avif')}}" class="w-full"></a>
</div>
<div class="p-3 m-3">
<a href="/all-products"><img src="{{ asset('assets/customer/images/pharmacy-WEB.avif')}}" class="w-full"></a>
</div>
</div>
<!-- clickIT category -->
<div class="grid grid-cols-3 sm:grid-cols-5  md:grid-cols-7 lg:grid-cols-10">
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/paan-corner_web.avif')}}"></a>   
</div>
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-2_10.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-3_9.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-4_9.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-5_4.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-6_5.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-7-1_0.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-8_4.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-3_9.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-10.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-11.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-12.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-13.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-14.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-15.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-16.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-17.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-18.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-19.avif')}}" class="img-fluid"></a>   
</div>   
<div class="m-2 w-full">
<a href="/all-products"><img src="{{ asset('assets/customer/images/Slice-20.avif')}}" class="img-fluid"></a>   
</div>   
</div> 
</div>

<!-- Dairy, Bread & Eggs -->
<h1 class="ms-2 text-base mt-5 font-bold sm:text-sm md:text-2xl lg:text-3xl">Dairy, Bread & Eggs <button type="button" class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
<a href="products-details.html"><div class="w-auto border-1 border-gray-200 p-8 mt-3">
<img src="{{ asset('assets/customer/images/product1.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 p-8 mt-3">
<img src="{{ asset('assets/customer/images/product2.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product3.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>
<a href="products-details.html"><div class="w-auto mt-3 border-1 border-gray-200 p-8">
<img src="{{ asset('assets/customer/images/product4.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>

<a href="products-details.html"><div class="w-auto mt-3 border-1 border-gray-200 p-8">
<img src="{{ asset('assets/customer/images/product5.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>

<a href="products-details.html"><div class="w-auto mt-3 border-1 border-gray-200 p-8">
<img src="{{ asset('assets/customer/images/product6.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>
</div> 
<!-- Snacks & Munchies -->
<h1 class="ms-2 text-base mt-5 font-bold sm:text-sm md:text-2xl lg:text-3xl">Snacks & Munchies<button type="button" class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product7.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product8.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product9.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div>
</a> 

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product10.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div>
</a> 

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product12.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div>
</a> 

<a href="products-details.html"><div class="w-auto border-1 border-gray-200 mt-3 p-8">
<img src="{{ asset('assets/customer/images/product13.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</a>
</div> 
<!-- Hookah -->
<h1 class="ms-2 text-base mt-5  font-bold sm:text-sm md:text-2xl lg:text-3xl">Hookah <button type="button" class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product14.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product15.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product16.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product17.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product18.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product19.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</div>
<!-- Mouth fresheners -->
<h1 class="ms-2 text-base mt-5 font-bold sm:text-sm md:text-2xl lg:text-3xl">Mouth fresheners <button type="button" class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
<div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product20.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product22.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product23.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product24.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product12.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 

<div class="w-auto border-1 border-gray-200 mt-3 p-5">
<img src="{{ asset('assets/customer/images/product14.avif')}}" class="mx-auto" />
<p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
<p class="text-md font-bold">Amul Gold Full Cream Milk</p>    
<p class="text-gray-500">500 ml</p>
<p>₹ 34 <button type="button" class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
</div> 
</div>
</section>
@endsection