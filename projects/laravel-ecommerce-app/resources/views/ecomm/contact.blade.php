@extends('ecomm.layout')
@section('title_name')
::contact us 
@endsection
@section('content')
<!-- clickIt content here  -->
<section id="clickIt-content" class="bg-gray-50">
<!-- HEADER -->
<div class="max-w-7xl mx-auto px-4 py-14 text-center">
<h1 class="text-4xl md:text-5xl font-bold text-gray-900">
Contact Us
</h1>
<p class="mt-4 text-gray-600 text-lg">
We’d love to hear from you. Reach out anytime.
</p>
</div>
<!-- CONTENT -->
<div class="max-w-7xl mx-auto px-4 pb-16 grid lg:grid-cols-2 gap-10">
<!-- LEFT: CONTACT INFO -->
<div class="space-y-8">
<!-- Address Card -->
<div class="bg-white p-6 rounded-2xl shadow">
<h2 class="text-2xl font-semibold text-gray-900">
Our Office
</h2>
<p class="mt-3 text-gray-600">
ClickIt Technologies Pvt. Ltd.<br>
3rd Floor, Tech Park Tower,<br>
Bengaluru, Karnataka – 560103<br>
India
</p>

<div class="mt-4 space-y-2 text-gray-700">
<p><strong>Email:</strong> support@clickit.com</p>
<p><strong>Phone:</strong> +91 98765 43210</p>
<p><strong>Working Hours:</strong> Mon – Sat, 9 AM – 9 PM</p>
</div>
</div>

<!-- Google Map -->
<div class="bg-white rounded-2xl shadow overflow-hidden h-[300px]">
<iframe
class="w-full h-full border-0"
loading="lazy"
allowfullscreen
referrerpolicy="no-referrer-when-downgrade"
src="https://www.google.com/maps?q=Bengaluru%20Karnataka&output=embed">
</iframe>
</div>

</div>

<!-- RIGHT: CONTACT FORM -->
<div class="bg-white p-8 rounded-2xl shadow">
<h2 class="text-2xl font-semibold text-gray-900">
Send Us a Message
</h2>

@if(Session('success'))
 
<h6 class="text-center p-2 bg-green-800"><span class='text-md text-white mt-3'>
  {{session('success')}}
 </span></h6>
@endif

@if ($errors->any())
    <div class="alert text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" class="mt-6 space-y-4">
@csrf
<!-- Name -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Full Name
</label>
<input type="text" name="fullname"
class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
placeholder="Enter your name">
</div>

<!-- Email -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Email Address
</label>
<input type="text"  name="email"
class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
placeholder="example@email.com">
</div>

<!-- Phone -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Mobile Number
</label>
<input type="text" name="mobile"
class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
placeholder="+91 XXXXX XXXXX">
</div>

<!-- Subject -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Subject
</label>
<select name="subject"
class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500">
<option value="General Inquiry">General Inquiry</option>
<option value="Order Issue">Order Issue</option>
<option value="Career">Career</option>
<option value="Partnership">Partnership</option>
</select>
</div>

<!-- Message -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Message
</label>
<textarea rows="4"  name="message"
class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
placeholder="Write your message..."></textarea>
</div>

<!-- Submit -->
<button type="submit"
class="w-full bg-green-600 text-white py-3 rounded-xl font-semibold hover:bg-green-700 transition">
Send Message
</button>
</form>
</div>
</div>
</section>
@endsection