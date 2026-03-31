<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Task Manager')</title>
<!-- Tailwind CSS (CDN for setup ease as requested) -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Alpine.js (for Modal & Dropdowns) -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- AOS Library for Animations -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
.fade-in { animation: fadeIn 0.5s ease-in-out; }
@keyframes fadeIn {
from { opacity: 0; transform: translateY(10px); }
to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body class="antialiased min-h-screen flex flex-col fade-in">
<!-- Navbar -->
<nav class="bg-indigo-600 shadow-lg">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<!-- Logo -->
<div class="flex-shrink-0">
<a href="{{ route('dashboard') }}" class="text-white font-bold text-xl tracking-wider hover:text-indigo-200 transition duration-300">
TaskMaster
</a>
</div>
<!-- Navigation -->
<div class="hidden md:block">
<div class="ml-10 flex items-baseline space-x-4">
@auth
<a href="{{ route('dashboard') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Dashboard</a>
<a href="{{ route('tasks.create') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Add Task</a>

<a href="{{ route('tasks.create') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Add Blogs</a>

<a href="{{ route('tasks.create') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Add Books</a>

@else
<a href="{{ route('login') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Login</a>
<a href="{{ route('register') }}" class="text-white hover:bg-indigo-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Register</a>
@endauth
</div>
</div>
<!-- User Profile / Mobile Menu -->
<div class="flex items-center">
@auth
<div class="relative" x-data="{ open: false }">
<button @click="open = !open" class="text-white font-medium flex items-center focus:outline-none hover:text-indigo-200 transition duration-300">
{{ Auth::user()->name }}
<svg class="ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
</svg>
</button>
<!-- Dropdown -->
<div x-show="open" @click.away="open = false" x-transition class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50" style="display: none;">
<form method="POST" action="{{ route('logout') }}">
@csrf
<button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition duration-300">
Logout
</button>
</form>
</div>
</div>
@endauth
</div>
</div>
</div>
</nav>

<!-- Page Content -->
<main class="flex-grow max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
<!-- Flash Messages -->
@if(session('success'))
<div data-aos="fade-down" class="mb-4 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm" role="alert">
<p class="font-bold">Success</p>
<p>{{ session('success') }}</p>
</div>
@endif
@if(session('error'))
<div data-aos="fade-down" class="mb-4 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded shadow-sm" role="alert">
<p class="font-bold">Error</p>
<p>{{ session('error') }}</p>
</div>
@endif
@yield('content')
</main>
<!-- Footer -->
<footer class="bg-white border-t border-gray-200 mt-auto">
<div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
<p class="text-center text-sm text-gray-500">&copy; {{ date('Y') }} TaskMaster. All rights reserved.</p>
</div>
</footer>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
duration: 800,
once: true,
});
</script>
</body>
</html>
