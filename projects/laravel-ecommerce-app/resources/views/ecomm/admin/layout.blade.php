<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enhanced Admin Dashboard :: @yield('title_name')</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

  <!-- Header -->
  <header class="bg-blue-600 text-white flex items-center justify-between px-4 py-3 shadow">
    <div class="flex items-center space-x-4">
      <!-- Sidebar toggle for mobile -->
      <button id="sidebarToggle" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
             stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
      <h1 class="text-xl font-bold">Blinkit Admin Dashboard</h1>
    </div>

    <!-- Search & Profile -->
    <div class="flex items-center space-x-4">
      <div class="relative hidden md:block">
        <input type="text" placeholder="Search..."
               class="rounded-full px-4 py-1 w-64 focus:outline-none focus:ring-2 focus:ring-white text-gray-800">
      </div>
      <button class="bg-blue-500 hover:bg-blue-700 px-3 py-1 rounded">Profile</button>
    </div>
  </header>

  <div class="flex flex-1 overflow-hidden">
    <!-- Sidebar -->
    <aside id="sidebar" class="bg-white w-64 border-r flex flex-col p-4 space-y-2 transition-all duration-300 md:flex">
      <nav class="flex-1 space-y-2 overflow-y-auto">
        <a href="/admin-login/dashboard" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-100">
          <i data-feather="home"></i><span>Dashboard</span>
        </a>
        <a href="/admin-login/manage-customers" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-100">
          <i data-feather="users"></i><span>Manage Customers</span>
        </a>
        <!-- Dropdown Menu -->
        <div x-data="{ open: false }" class="relative">
          <button id="reportsBtn" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-blue-100">
            <span class="flex items-center space-x-2">
              <i data-feather="bar-chart-2"></i><span>Add Category</span>
            </span>
            <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="reportsDropdown" class="hidden ml-6 mt-2 space-y-1">
            <a href="/admin-login/add-category" class="block py-1 px-2 rounded hover:bg-blue-100">Add Category</a>
            <a href="/admin-login/add-category" class="block py-1 px-2 rounded hover:bg-blue-100">Manage Category</a>
           
          </div>
        </div>

          <div x-data="{ open: false }" class="relative">
          <button id="reportsBtn1" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-blue-100">
            <span class="flex items-center space-x-2">
              <i data-feather="bar-chart-2"></i><span>Add SubCategory</span>
            </span>
            <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="reportsDropdown1" class="hidden ml-6 mt-2 space-y-1">
            <a href="/admin-login/add-subcategory" class="block py-1 px-2 rounded hover:bg-blue-100">Add SubCategory</a>
            <a href="/admin-login/manage-subcategory" class="block py-1 px-2 rounded hover:bg-blue-100">Manage SubCategory</a>
           
          </div>
        </div>

         <div x-data="{ open: false }" class="relative">
          <button id="reportsBtn2" class="flex items-center justify-between w-full py-2 px-3 rounded hover:bg-blue-100">
            <span class="flex items-center space-x-2">
              <i data-feather="bar-chart-2"></i><span>Add Products</span>
            </span>
            <svg class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div id="reportsDropdown2" class="hidden ml-6 mt-2 space-y-1">
            <a href="/admin-login/add-products" class="block py-1 px-2 rounded hover:bg-blue-100">Add roducts</a>
            <a href="/admin-login/manage-products" class="block py-1 px-2 rounded hover:bg-blue-100">Manage Products</a>
           
          </div>
        </div>

            
        <a href="/admin-login/manage-contacts" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-100">
          <i data-feather="settings"></i><span>Manage contacts</span>
        </a>

            
        <a href="#" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-100">
          <i data-feather="settings"></i><span>Manage Reviews</span>
        </a>

            
        <a href="#" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-100">
          <i data-feather="settings"></i><span>Manage Orders</span>
        </a>
          
        <a href="#" class="flex items-center space-x-2 py-2 px-3 rounded hover:bg-blue-100">
          <i data-feather="settings"></i><span>Settings</span>
        </a>
      </nav>
      <footer class="text-gray-500 text-sm mt-auto text-center">
        © 2026 Admin Panel
      </footer>
    </aside>

    <!-- Main Content -->
     @yield('content')
  
  </div>

  <!-- Footer -->
  <footer class="bg-white text-gray-600 p-4 border-t text-center">
    © 2026 Admin Panel. All rights reserved.
  </footer>

  <!-- Scripts -->
  <script>
    // Initialize Feather icons
    feather.replace();

    // Sidebar toggle for mobile
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebarToggle');
    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('hidden');
    });

    // Dropdown toggle for category
    const reportsBtn = document.getElementById('reportsBtn');
    const reportsDropdown = document.getElementById('reportsDropdown');
    reportsBtn.addEventListener('click', () => {
      reportsDropdown.classList.toggle('hidden');
      reportsBtn.querySelector('svg').classList.toggle('rotate-180');
    });
    // Dropdown toggle for subcategory
    const reportsBtn1 = document.getElementById('reportsBtn1');
    const reportsDropdown1 = document.getElementById('reportsDropdown1');
    reportsBtn1.addEventListener('click', () => {
      reportsDropdown1.classList.toggle('hidden');
      reportsBtn.querySelector('svg').classList.toggle('rotate-180');
    });

     // Dropdown toggle for products
    const reportsBtn2 = document.getElementById('reportsBtn2');
    const reportsDropdown2 = document.getElementById('reportsDropdown2');
    reportsBtn2.addEventListener('click', () => {
      reportsDropdown2.classList.toggle('hidden');
      reportsBtn.querySelector('svg').classList.toggle('rotate-180');
    });

    // Chart.js
    const ctx = document.getElementById('revenueChart').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
        datasets: [{
          label: 'Revenue ($)',
          data: [1200,1900,3000,5000,2300,3400,4500],
          borderColor: '#3b82f6',
          backgroundColor: 'rgba(59,130,246,0.2)',
          fill: true,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true } }
      }
    });
  </script>
</body>
</html>