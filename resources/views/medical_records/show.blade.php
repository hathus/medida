<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Expedientes Medicos -> Mostrar Registro') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-5 text-center uppercase">Expediente Medico</h1>

                    <div class="mt-4 sm:flex  sm:space-x-2 sm:space-y-0 space-y-2">
                        <div class="sm:w-2/5"></div>
                        <div class="sm:w-3/5">
                            <label for="date">Fecha de Registro</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text"
                                value="{{ \Carbon\Carbon::parse($medicalRecord->created_at)->locale('es')->setTimezone('America/Mexico_City')->translatedFormat('l j \de F \de Y h:i:s A') }}"
                                disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex  sm:space-x-2 sm:space-y-0 space-y-2">
                        <div class="sm:w-full">
                            <label for="name">Nombre</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->name }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/2">
                            <label for="email">Email</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->email }}" disabled>
                        </div>
                        <div class="sm:w-1/2">
                            <label for="phone">Teléfono</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->phone }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/2">
                            <label for="age">Edad</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text"
                                value="{{ $medicalRecord->age_eval }} años"
                                disabled>
                        </div>
                        <div class="sm:w-1/2">
                            <label for="gender">Genero</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text"
                                value="{{ $medicalRecord->gender_eval }}"
                                disabled>
                        </div>
                    </div>
                    

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/2">
                            <label for="city">Ciudad</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->city }}" disabled>
                        </div>
                        <div class="sm:w-1/2">
                            <label for="state">Estado</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->state_eval }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/4">
                            <label for="weight">Peso</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->weight }} Kgs" disabled>
                        </div>
                        <div class="sm:w-1/4">
                            <label for="size">Talla/Estatura</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->size }} mts" disabled>
                        </div>
                        <div class="sm:w-1/4">
                            <label for="imc">IMC</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->imc }}" disabled>
                        </div>
                        <div class="sm:w-1/4">
                            <label for="imc_eval">Evaluación IMC</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->imc_eval }}" disabled>
                        </div>
                    </div>
                

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/4">
                            <label for="glucose">Glucosa</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->glucose }}" disabled>
                        </div>
                        <div class="sm:w-1/4">
                            <label for="glucose_eval">Evaluación Glucosa</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->glucose_eval }}" disabled>
                        </div>
                        <div class="sm:w-1/4">
                            <label for="glucose">Metabolismo Basal</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->tmb }}" disabled>
                        </div>
                        <div class="sm:w-1/4">
                            <label for="glucose_eval">Calorias por día</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->tmt }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/2">
                            <label for="exercised">Ejercicio</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->exercised_eval }}" disabled>
                        </div>
                        <div class="sm:w-1/2">
                            <label for="size">Comida Chatarra</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->fast_food_eval }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-3 sm:space-y-0 space-y-2">
                        <div class="sm:w-1/2">
                            <label for="glucose">Fuma?</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->smoking_eval }}" disabled>
                        </div>
                        <div class="sm:w-1/2">
                            <label for="glucose_eval">Bebe Alcohol?</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->alcoholism_eval }}" disabled>
                        </div>

                        <div class="sm:w-1/2">
                            <label for="glucose_eval">Usa Drogas?</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medicalRecord->drugs_eval }}" disabled>
                        </div>
                    </div>

                    
                </div>
            </div>
            <div class="mt-2 sm:flex sm:justify-end sm:items-center p-3 sm:p-0">
                <button onclick="window.print()" class="border border-lime-300 p-2 rounded dark:text-gray-100 uppercase text-sm hover:bg-lime-700 hover:text-white print:hidden w-full sm:w-1/4">
                    Imprimir Expediente
                </button>
            </div>
        </div>
    </div>
</x-app-layout>