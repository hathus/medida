<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consultas Medicas') }}
            de {{ $name }}
        </h2>
        @php
            $now = \Carbon\Carbon::now()->locale('es')->setTimezone('America/Mexico_City')->format('d m Y');
            $appointment = \Carbon\Carbon::parse($consultas->last()->created_at)
                ->locale('es')
                ->setTimezone('America/Mexico_City')
                ->format('d m Y');
        @endphp
        <div class="mt-2 sm:flex sm:justify-start sm:items-center p-2 sm:p-0">
            @if ($appointment !== $now)
                <a href="{{ route('nueva-consulta', $id) }}"
                    class="mt-2 sm:mr-2 border border-lime-500 rounded p-2 flex sm:w-1/4 justify-center items-center dark:text-gray-100 text-sm uppercase font-bold hover:bg-lime-700  transition ease-in-out duration-150 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-5 mx-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                    </svg>
                    {{ __('Nueva Consulta') }}
                </a>
            @endif
            <a href="{{ route('expedientes') }}"
                class="mt-2 border border-gray-500 rounded p-2 flex sm:w-1/4 justify-center items-center dark:text-gray-100 text-sm uppercase font-bold hover:bg-gray-700  transition ease-in-out duration-150 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 mx-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                </svg>
                regresar
            </a>
        </div>
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
    <livewire:show-medical-appointments :$id />
</x-app-layout>
