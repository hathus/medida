@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-lime-400 dark:border-lime-600 text-start text-base font-medium text-lime-700 dark:text-gray-300 bg-lime-50 dark:bg-green-300/50 focus:outline-none focus:text-lime-800 dark:focus:text-black-500 focus:bg-lime-100 dark:focus:bg-lime-900 focus:border-lime-700 dark:focus:border-lime-300 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-lime-600 dark:text-lime-400 hover:text-lime-800 dark:hover:text-gray-200 hover:bg-lime-50 dark:hover:bg-lime-700 hover:border-lime-300 dark:hover:border-lime-600 focus:outline-none focus:text-lime-800 dark:focus:text-lime-200 focus:bg-lime-50 dark:focus:bg-lime-700 focus:border-lime-300 dark:focus:border-lime-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
