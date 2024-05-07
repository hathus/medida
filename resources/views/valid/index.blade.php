<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl dark:text-gray-200 leading-tight">
            {{ __('Validado Por') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2">
                <div class="rounded w-full p-2">
                    <img class="rounded" src="img/alejandra.jpg" alt="alejandra">
                </div>
                <div class="rounded w-full p-2">
                    <img class="rounded" src="img/damian.jpg" alt="alejandra">
                </div>
                <div class="rounded w-full p-2">
                    <img class="rounded" src="img/alejandra.jpg" alt="alejandra">
                </div>
                <div class="rounded w-full p-2">
                    <img class="rounded" src="img/alejandra.jpg" alt="alejandra">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
