@props(['type' => 'submit', 'color' => 'indigo'])

@php
    $baseClasses = "inline-flex items-center justify-center px-4 py-2 border rounded-md shadow-sm text-sm font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-300 transform hover:-translate-y-1";
    
    $colorClasses = [
        'indigo' => 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500',
        'red'    => 'border-transparent text-white bg-red-600 hover:bg-red-700 focus:ring-red-500',
        'white'  => 'border-gray-300 text-gray-700 bg-white hover:bg-gray-50 focus:ring-indigo-500',
    ][$color] ?? 'border-transparent text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500';
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "{$baseClasses} {$colorClasses}"]) }}>
    {{ $slot }}
</button>
