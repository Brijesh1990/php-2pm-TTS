<div {{ $attributes->merge(['class' => 'bg-white shadow-lg rounded-xl overflow-hidden transition duration-300 hover:shadow-xl transform hover:-translate-y-1']) }}>
    @if(isset($header))
        <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
            {{ $header }}
        </div>
    @endif

    <div class="px-6 py-4">
        {{ $slot }}
    </div>

    @if(isset($footer))
        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
            {{ $footer }}
        </div>
    @endif
</div>
