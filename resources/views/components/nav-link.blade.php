@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-400 dark:border-red-600 text-sm font-medium leading-5 text-gray-800 dark:text-gray-800 focus:outline-none focus:border-lime-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-100 dark:text-gray-100 hover:text-gray-700 dark:hover:text-gray-300 hover:border-yellow-300 dark:hover:border-yellow-700 focus:outline-none focus:text-gray-700 dark:focus:text-gray-400 focus:border-gray-300 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
