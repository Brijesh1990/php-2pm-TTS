@extends('ecomm.admin.layout')
@section('title_name')
::Add Category
@endsection
@section('content')

<main class="flex-1 overflow-auto p-6">

  <div class="max-w-5xl mx-auto bg-white rounded-xl shadow p-6">

    <!-- Title -->
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Add Product</h2>
      <p class="text-gray-500 text-sm">Create a new product in your inventory</p>
    </div>

    <!-- Form -->
    <form class="space-y-6">

      <!-- Basic Info -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Product Name -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Product Name
          </label>
          <input type="text"
                 placeholder="Enter product name"
                 class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- SKU -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            SKU
          </label>
          <input type="text"
                 placeholder="Enter SKU"
                 class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Category -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Category
          </label>
          <select class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option>Select Category</option>
            <option>Electronics</option>
            <option>Clothing</option>
            <option>Accessories</option>
          </select>
        </div>

        <!-- Subcategory -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Subcategory
          </label>
          <select class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option>Select Subcategory</option>
            <option>Mobiles</option>
            <option>Laptops</option>
            <option>Headphones</option>
          </select>
        </div>

        <!-- Price -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Price ($)
          </label>
          <input type="number"
                 placeholder="0.00"
                 class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Discount Price -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Discount Price ($)
          </label>
          <input type="number"
                 placeholder="0.00"
                 class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Stock -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">
            Stock Quantity
          </label>
          <input type="number"
                 placeholder="Enter stock quantity"
                 class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <!-- Status Toggle -->
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-700">
            Active Status
          </label>
          <label class="inline-flex items-center cursor-pointer">
            <input type="checkbox" class="sr-only peer" checked>
            <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:bg-blue-600 relative transition">
              <div class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-5"></div>
            </div>
          </label>
        </div>

      </div>

      <!-- Description -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
          Product Description
        </label>
        <textarea rows="5"
                  placeholder="Enter product description"
                  class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
      </div>

      <!-- Product Images -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
          Product Images
        </label>
        <input type="file" multiple
               class="w-full text-sm text-gray-500
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-lg file:border-0
                      file:text-sm file:font-semibold
                      file:bg-blue-50 file:text-blue-700
                      hover:file:bg-blue-100">
      </div>

      <!-- SEO Section -->
      <div class="border-t pt-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">SEO Settings</h3>

        <div class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
              Meta Title
            </label>
            <input type="text"
                   placeholder="Enter meta title"
                   class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
          </div>

          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
              Meta Description
            </label>
            <textarea rows="3"
                      placeholder="Enter meta description"
                      class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex flex-col sm:flex-row justify-end gap-3 pt-4 border-t">
        <button type="reset"
                class="px-6 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
          Cancel
        </button>
        <button type="submit"
                class="px-6 py-2 rounded-lg bg-blue-600 text-white font-medium hover:bg-blue-700 transition shadow">
          Save Product
        </button>
      </div>

    </form>

  </div>

</main>

@endsection