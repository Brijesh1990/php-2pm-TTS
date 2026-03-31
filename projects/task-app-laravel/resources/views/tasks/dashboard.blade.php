@extends('layouts.app')
@section('title', 'Dashboard - TaskMaster')
@section('content')
<div x-data="{ 
    deleteModalOpen: false, 
    taskIdToDelete: null,
    openDeleteModal(id) {
        this.taskIdToDelete = id;
        this.deleteModalOpen = true;
    }
}">
    <!-- Header Section -->
    <div class="mb-8 flex justify-between items-center  p-5" data-aos="fade-down">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Welcome, {{ Auth::user()->name }}!</h1>
            <p class="mt-1 text-sm text-gray-500">Manage your tasks effectively.</p>
        </div>
        <a href="{{ route('tasks.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 transform hover:-translate-y-1">
            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
            Add New Task
        </a>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-3 mb-8 p-5">
        <!-- Total Tasks -->
        <div data-aos="fade-up" data-aos-delay="100" class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-xl transform hover:-translate-y-1">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-500 rounded-md p-3">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Total Tasks</dt>
                            <dd class="text-2xl font-semibold text-gray-900">{{ $totalTasks }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Completed Tasks -->
        <div data-aos="fade-up" data-aos-delay="200" class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-xl transform hover:-translate-y-1  p-5">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-green-500 rounded-md p-3">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Completed</dt>
                            <dd class="text-2xl font-semibold text-gray-900">{{ $completedTasks }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Tasks -->
        <div data-aos="fade-up" data-aos-delay="300" class="bg-white overflow-hidden shadow-lg rounded-xl transition duration-300 hover:shadow-xl transform hover:-translate-y-1">
            <div class="p-5">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-yellow-500 rounded-md p-3">
                        <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Pending</dt>
                            <dd class="text-2xl font-semibold text-gray-900">{{ $pendingTasks }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div data-aos="fade-up" data-aos-delay="400" class="bg-white shadow-lg rounded-xl overflow-hidden">
        
        <!-- Filter Bar -->
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center sm:flex-row flex-col">
            <h3 class="text-lg leading-6 font-medium text-gray-900 mb-2 sm:mb-0">Your Tasks</h3>
            
            <div class="flex space-x-2">
                <a href="{{ route('dashboard', ['filter' => 'all']) }}" class="px-3 py-1 rounded-full text-sm font-medium transition duration-300 {{ $filter === 'all' ? 'bg-indigo-100 text-indigo-800' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-300' }}">All</a>
                <a href="{{ route('dashboard', ['filter' => 'completed']) }}" class="px-3 py-1 rounded-full text-sm font-medium transition duration-300 {{ $filter === 'completed' ? 'bg-green-100 text-green-800' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-300' }}">Completed</a>
                <a href="{{ route('dashboard', ['filter' => 'pending']) }}" class="px-3 py-1 rounded-full text-sm font-medium transition duration-300 {{ $filter === 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-white text-gray-600 hover:bg-gray-100 border border-gray-300' }}">Pending</a>
            </div>
        </div>

        <!-- Task List -->
        @if($tasks->count() > 0)
            <ul class="divide-y divide-gray-200">
                @foreach($tasks as $task)
                    <li class="px-6 py-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                        <div class="flex items-center justify-between">
                            <div class="flex-1 min-w-0">
                                <h4 class="text-lg font-bold text-gray-900 truncate {{ $task->status === 'completed' ? 'line-through text-gray-400' : '' }}">
                                    {{ $task->title }}
                                </h4>
                                @if($task->description)
                                    <p class="mt-1 text-sm text-gray-500 truncate {{ $task->status === 'completed' ? 'line-through text-gray-400' : '' }}">{{ $task->description }}</p>
                                @endif
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    Created {{ $task->created_at->format('M d, Y') }}
                                </div>
                            </div>
                            
                            <div class="ml-4 flex-shrink-0 flex items-center space-x-4">
                                <!-- Status Badge & Form -->
                                <form action="{{ route('tasks.update_status', $task->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="{{ $task->status === 'pending' ? 'completed' : 'pending' }}">
                                    <button type="submit" class="focus:outline-none transition duration-300 transform hover:scale-105">
                                        @if($task->status === 'completed')
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 shadow-sm cursor-pointer hover:bg-green-200">
                                                Completed
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 shadow-sm cursor-pointer hover:bg-yellow-200">
                                                Pending
                                            </span>
                                        @endif
                                    </button>
                                </form>

                                <!-- Delete Button -->
                                <button type="button" @click="openDeleteModal({{ $task->id }})" class="p-1 rounded-full text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition duration-300">
                                    <span class="sr-only">Delete</span>
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No tasks found</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new task.</p>
                <div class="mt-6">
                    <a href="{{ route('tasks.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                        New Task
                    </a>
                </div>
            </div>
        @endif
    </div>

    <!-- Delete Confirmation Modal (Alpine.js) -->
    <div x-show="deleteModalOpen" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background Overlay -->
            <div x-show="deleteModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="deleteModalOpen = false"></div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!-- Modal Panel -->
            <div x-show="deleteModalOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Delete Task</h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">Are you sure you want to delete this task? This action cannot be undone.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                    <form :action="`/tasks/delete/${taskIdToDelete}`" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm transition duration-300">
                            Delete Task
                        </button>
                    </form>
                    <button @click="deleteModalOpen = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm transition duration-300">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
