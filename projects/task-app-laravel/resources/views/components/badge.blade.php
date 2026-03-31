@props(['status'])

@php
    $baseClasses = "inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium shadow-sm cursor-pointer transition duration-300 hover:scale-105";

    $colors = [
        'completed' => 'bg-green-100 text-green-800 hover:bg-green-200',
        'pending'   => 'bg-yellow-100 text-yellow-800 hover:bg-yellow-200',
    ];

    $colorClass = $colors[$status] ?? 'bg-gray-100 text-gray-800 hover:bg-gray-200';
@endphp

<span {{ $attributes->merge(['class' => "$baseClasses $colorClass"]) }}>
    {{ ucfirst($status) }}
</span>
