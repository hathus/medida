<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold sm:text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Menús
        </h2>
        
        <livewire:show-menu-recipes />

    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 alert">
            @if (session()->has('message'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                    <div id="alert"
                        class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold
                                p-2 my-3 text-center">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
    <livewire:show-recipes />
</x-app-layout>
