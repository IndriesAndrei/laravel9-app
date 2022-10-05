{{-- with $attributes->merge we can add default values to a div/tag --}}
<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6' ]) }}>
   {{-- so we can use <x-card></x-card> with closing tag, we need to output in $lost variable --}}
    {{ $slot }}
</div>