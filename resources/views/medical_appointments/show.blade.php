<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold sm:text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Expedientes Medicos->Imprimir Consulta') }}
        </h2>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-5 text-center uppercase">Consulta Medica</h1>

                    <div class="mt-4 sm:flex  sm:space-x-2 sm:space-y-0 space-y-2">
                        <div class="sm:w-2/5"></div>
                        <div class="sm:w-3/5">
                            <label for="date">Fecha de Consulta</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text"
                                value="{{ \Carbon\Carbon::parse($medApp->created_at)->locale('es')->setTimezone('America/Mexico_City')->translatedFormat('l j \de F \de Y h:i:s A') }}"
                                disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex  sm:space-x-2 sm:space-y-0 space-y-2">
                        <div class="sm:w-3/5">
                            <label for="name">Nombre</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->expediente->name }}" disabled>
                        </div>

                        <div class="sm:w-1/5">
                            <label for="gender">Genero</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->eval_gender }}" disabled>
                        </div>

                        <div class="sm:w-1/5">
                            <label for="gender">Edad</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text"
                                value="{{ floor(Carbon\Carbon::parse($medApp->expediente->age)->diffInYears(Carbon\Carbon::now())) }} años"
                                disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-2 sm:space-y-0 space-y-0">
                        <div class="sm:w-1/4">
                            {{-- Peso --}}
                            <label for="weight">Peso:</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->weight }} Kgs." disabled>
                        </div>

                        <div class="sm:w-1/4">
                            {{-- Talla/Estatura --}}
                            <label for="size">Talla/Estatura</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->size }} mts." disabled>
                        </div>

                        <div class="sm:w-1/4">
                            {{-- Glucosa --}}
                            <label for="glucose">Glucosa</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->glucose }}" disabled>
                        </div>

                        <div class="sm:w-1/4">
                            {{-- Temperatura Corporal --}}
                            <label for="body_temp">Temp. Corporal</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->body_temp }} °C" disabled>
                        </div>

                    </div>

                    <div class="mt-4 sm:flex sm:space-x-2 sm:space-y-0 space-y-0">
                        <div class="sm:w-1/4">
                            {{-- IMC --}}
                            <label for="imc">IMC</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->imc }}" disabled>
                        </div>

                        <div class="sm:w-1/4">
                            {{-- Eval IMC --}}
                            <label for="eval_imc">Evaluación IMC</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->eval_imc }}" disabled>
                        </div>

                        <div class="sm:w-1/4">
                            {{-- Presión Arterial --}}
                            <label for="blood_press">Presion Arterial</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->blood_pressure }}" disabled>
                        </div>

                        <div class="sm:w-1/4">
                            {{-- Eval Presión Arterial --}}
                            <label for="eval_blood_press">Eval. Presion Arterial</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->eval_blood_press }}" disabled>
                        </div>
                    </div>

                    {{-- TMB y TMT --}}
                    <div class="mt-4 sm:flex sm:space-x-2 sm:space-y-0 space-y-0">
                        {{-- TMB --}}
                        <div class="sm:w-1/2">
                            <label for="allergies">Metabolismo Basal</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->tmb }}" disabled>
                        </div>

                        {{-- TMT --}}
                        <div class="sm:w-1/2">
                            <label for="allergies">Calorias por día</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->tmt }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-2 sm:space-y-0 space-y-0">
                        {{-- Alergías --}}
                        <div class="sm:w-full">
                            <label for="allergies">Alergías</label>
                            <input
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                type="text" value="{{ $medApp->allergies }}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-2 sm:space-y-0 space-y-0">
                        {{-- Diagnostico --}}
                        <div class="sm:w-full">
                            <label for="diagnostic">Diagnostico</label>
                            <textarea
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                name="diagnostic" id="diagnostic" disabled>{{ $medApp->diagnostic }}</textarea>
                        </div>
                    </div>

                    <div class="mt-4 sm:flex sm:space-x-2 sm:space-y-0 space-y-0">
                        {{-- Tratamiento --}}
                        <div class="sm:w-full">
                            <label for="treatment">Tratamiento</label>
                            <textarea
                                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm w-full"
                                name="treatment" id="treatment" disabled>{{ $medApp->treatment }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2 sm:flex sm:justify-end sm:items-center p-3 sm:p-0">
                <button onclick="window.print()"
                    class="mt-2 border border-lime-300 p-2 rounded dark:text-gray-100 uppercase text-sm hover:bg-lime-700 print:hidden w-full sm:w-1/4 hover:text-white">
                    Imprimir Consulta
                </button>
                <a href="{{route('consultas', $medApp->expediente->id)}}"
                    class="sm:ml-2 mt-2 border border-gray-300 p-2 rounded dark:text-gray-100 uppercase text-sm hover:bg-gray-700 print:hidden w-full sm:w-1/4 hover:text-white text-center">
                    regresar
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
