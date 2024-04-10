<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consultas Medicas->Nueva Consulta') }}
        </h2>
        <p class="mt-2 text-gray-100">Paciente: {{$name}} </p>
        <p class="text-gray-200">Fecha de la Consulta: {{ \Carbon\Carbon::parse($fecha)->locale('es')->setTimezone('America/Mexico_City')->translatedFormat('l j \de F \de Y') }}</p>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="md:flex md:justify-center p-5">
                        <livewire:edit-medical-appointment :$id/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>