<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Leave Management System</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<!-- Header -->
<header class="bg-indigo-600 text-white shadow-md">
<div class="flex items-center justify-between px-6 py-4">
<div class="flex items-center space-x-3">
<!-- Hamburger -->
<button id="menuBtn" class="md:hidden focus:outline-none">
<svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2"
viewBox="0 0 24 24">
<path stroke-linecap="round" stroke-linejoin="round"
d="M4 6h16M4 12h16M4 18h16"/>
</svg>
</button>
<h1 class="text-xl font-bold">Leave Management System</h1>
</div>
<div class="hidden md:block">
<span class="text-sm">Welcome, Admin</span>
</div>
</div>
</header>
<div class="flex flex-1 p-2 md:p-20 md:mt-15">
<!-- Sidebar -->
<aside id="sidebar"
class="fixed md:static top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50">
<div class="p-6 border-b">
<h2 class="text-lg font-semibold text-indigo-600">Navigation</h2>
</div>
<nav class="p-4 space-y-2">
<a href="#" class="block px-4 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Dashboard</a>
<a href="#" class="block px-4 py-2 rounded-lg bg-indigo-100 text-indigo-600 font-medium">Apply Leave</a>
<a href="#" class="block px-4 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Leave History</a>
<a href="#" class="block px-4 py-2 rounded-lg hover:bg-indigo-100 text-gray-700">Settings</a>
</nav>
</aside>

<!-- Overlay (mobile only) -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-40 hidden md:hidden"></div>

<!-- Main Content -->
@yield("content")
</div>

<!-- Toggle Script -->
<script>
const menuBtn = document.getElementById('menuBtn');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');

menuBtn.addEventListener('click', () => {
sidebar.classList.toggle('-translate-x-full');
overlay.classList.toggle('hidden');
});

overlay.addEventListener('click', () => {
sidebar.classList.add('-translate-x-full');
overlay.classList.add('hidden');
});
</script>

</body>
</html>
