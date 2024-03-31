<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('medical_records_index.header_title') }}
        </h2>
        <x-nav-link :href="route('nuevo-expediente')" :active="request()->routeIs('nuevo-expediente')" wire:navigate class="mt-3 border-lime-700">
            {{ __('Nuevo Expediente') }}
        </x-nav-link>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 alert">
            @if (session()->has('message'))
                {{-- <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3 text-sm text-center">
                    {{ session('message') }}
                </div> --}}
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                    <div id="alert" class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold
                                p-2 my-3 text-center">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
        </div>
    </div>

    <livewire:show-medical-records />
</x-app-layout>