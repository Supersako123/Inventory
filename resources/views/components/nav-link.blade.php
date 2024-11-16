
@php
$classes = 'py-3 pl-6 w-full  bg-gray-800 text-white tracking-wider hover:bg-gray-700 ease-in';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
