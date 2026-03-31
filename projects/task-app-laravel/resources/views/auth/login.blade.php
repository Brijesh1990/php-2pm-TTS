@extends('layouts.app')

@section('title', 'Login - TaskMaster')

@section('content')
<div class="min-h-[70vh] flex items-center justify-center p-4">
    <div data-aos="zoom-in" class="max-w-md w-full bg-white rounded-xl shadow-xl overflow-hidden">
        <div class="px-8 py-10">
            <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-8">
                Sign in to your account
            </h2>
            
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}"
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-300 @error('email') border-red-500 @enderror">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm transition duration-300 @error('password') border-red-500 @enderror">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 transform hover:-translate-y-1">
                        Sign in
                    </button>
                </div>
            </form>
            
            <div class="mt-6 text-center text-sm">
                <p class="text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-300">Sign up</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
