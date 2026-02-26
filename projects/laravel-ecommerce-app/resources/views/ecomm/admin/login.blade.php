<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
<style>
/* Custom animations */
@keyframes slideInLeft {
0% { transform: translateX(-50px); opacity: 0; }
100% { transform: translateX(0); opacity: 1; }
}
@keyframes fadeInUp {
0% { transform: translateY(20px); opacity: 0; }
100% { transform: translateY(0); opacity: 1; }
}

.animate-slide-in-left { animation: slideInLeft 0.7s ease forwards; }
.animate-fade-in-up { animation: fadeInUp 0.7s ease forwards; }
</style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="grid grid-cols-1 md:grid-cols-2 bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl">

<!-- Left Grid - Image / Illustration -->
<div class="hidden md:block bg-gradient-to-tr from-blue-600 to-indigo-700 animate-slide-in-left">
<img src="https://cdn.dribbble.com/userupload/23768797/file/original-dadbb97263608a1f5c66f79abeae84c1.gif" alt="Admin" class="h-full w-full object-cover">
</div>

<!-- Right Grid - Login Form -->
<div class="p-8 md:p-12 flex flex-col justify-center animate-fade-in-up">
<h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Admin Login</h2>

<form action="#" method="POST" class="space-y-5">
<div>
<label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
<input type="email" id="email" name="email" required
class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
</div>

<div>
<label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
<input type="password" id="password" name="password" required
class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
</div>

<button type="submit"
class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition duration-300">
Login
</button>
</form>

<p class="mt-6 text-sm text-gray-500 text-center">
© 2026 Admin Panel. All rights reserved.
</p>
</div>

</div>

</body>
</html>