@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 underline underline-offset-4 text-sm font-medium leading-5 text-sky-700 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 underline-offset-4 text-sm font-medium leading-5 text-cyan-950 hover:text-sky-700 hover:border-indigo-700 focus:outline-none focus:text-gray-700 focus:border-indigo-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
