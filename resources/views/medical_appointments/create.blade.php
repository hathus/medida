<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consultas Medicas->Nueva Consulta') }}
        </h2>
        <p class="mt-2 dark:text-gray-100">Paciente: {{$name}}</p>
        <p class="dark:text-gray-100">Fecha de la Consulta: {{ \Carbon\Carbon::parse(now())->locale('es')->setTimezone('America/Mexico_City')->translatedFormat('l j \de F \de Y') }}</p>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- <h1 class="text-2xl font-bold text-center mb-10">Nuevo Expediente Medico</h1> --}}

                    <div class="md:flex md:justify-center p-5">
                        <livewire:create-medical-appointment :$id/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
