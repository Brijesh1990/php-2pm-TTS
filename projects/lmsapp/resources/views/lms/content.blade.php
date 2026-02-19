@extends('lms.layout')

@section("content")
<main class="flex-1 p-6 md:p-10">
<div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8">
<h2 class="text-2xl font-semibold text-gray-800 mb-6">
Apply for Leave
</h2>

<form class="space-y-6">

<!-- Employee Name -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Employee Name
</label>
<input type="text"
class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
placeholder="Enter employee name">
</div>

<!-- Leave Type -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Leave Type
</label>
<select
class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">
<option value="">Select Type</option>
<option value="Sick">Sick</option>
<option value="Casual">Casual</option>
<option value="Vacation">Vacation</option>
</select>
</div>

<!-- Dates -->
<div class="grid md:grid-cols-2 gap-6">
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Start Date
</label>
<input type="date"
class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">
</div>

<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
End Date
</label>
<input type="date"
class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">
</div>
</div>

<!-- Reason -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Reason
</label>
<textarea rows="4"
class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none"
placeholder="Enter reason for leave"></textarea>
</div>

<!-- Status -->
<div>
<label class="block text-sm font-medium text-gray-700 mb-1">
Status
</label>
<select
class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-400 focus:outline-none">
<option value="Pending" selected>Pending</option>
<option value="Approved">Approved</option>
<option value="Rejected">Rejected</option>
</select>
</div>

<!-- Submit Button -->
<div class="pt-4">
<button type="submit"
class="w-full md:w-auto px-6 py-2 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 transition duration-200">
Submit Leave Request
</button>
</div>

</form>
</div>

</main>
@endsection