@extends('ecomm.admin.layout')
@section('title_name')
::Manage all contacts
@endsection
@section('content')
<main class="flex-1 overflow-auto p-6">

  <div class="max-w-7xl mx-auto bg-white rounded-xl shadow p-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
      <div>
        <h2 class="text-2xl font-bold text-gray-800">Manage Contacts</h2>
        <p class="text-gray-500 text-sm">View and manage all contact inquiries</p>
      </div>
      <div class="mt-4 sm:mt-0">
        <input type="text" placeholder="Search contacts..."
               class="w-full sm:w-64 rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
      </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full divide-y divide-gray-200">

        <!-- Table Head -->
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subject</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Message</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Action</th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="bg-white divide-y divide-gray-200">

          <!-- Row -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium text-gray-800">John Doe</td>
            <td class="px-6 py-4 text-gray-600">john@example.com</td>
            <td class="px-6 py-4 text-gray-600">Product Inquiry</td>
            <td class="px-6 py-4 text-gray-600 truncate max-w-xs">
              I would like more details about your product pricing...
            </td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">
                New
              </span>
            </td>
            <td class="px-6 py-4 text-center">
              <button onclick="deleteContact(this)"
                      class="px-3 py-1 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                Delete
              </button>
            </td>
          </tr>

          <!-- Row -->
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-4 font-medium text-gray-800">Jane Smith</td>
            <td class="px-6 py-4 text-gray-600">jane@example.com</td>
            <td class="px-6 py-4 text-gray-600">Support</td>
            <td class="px-6 py-4 text-gray-600 truncate max-w-xs">
              I'm facing issues logging into my account...
            </td>
            <td class="px-6 py-4">
              <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">
                Pending
              </span>
            </td>
            <td class="px-6 py-4 text-center">
              <button onclick="deleteContact(this)"
                      class="px-3 py-1 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                Delete
              </button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

    <!-- Footer Pagination -->
    <div class="flex flex-col sm:flex-row justify-between items-center mt-6">
      <p class="text-sm text-gray-500">Showing 1 to 2 of 20 results</p>
      <div class="flex space-x-2 mt-3 sm:mt-0">
        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">Previous</button>
        <button class="px-3 py-1 bg-blue-600 text-white rounded-lg">1</button>
        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">2</button>
        <button class="px-3 py-1 border rounded-lg text-gray-600 hover:bg-gray-100">Next</button>
      </div>
    </div>

  </div>

</main>

<!-- Delete Script -->
<script>
  function deleteContact(button) {
    if (confirm("Are you sure you want to delete this contact?")) {
      const row = button.closest("tr");
      row.remove();
    }
  }
</script>
@endsection