<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Expedientes Medicos -> Mostrar Registro') }}
        </h2>
    </x-slot>

    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-xl font-bold mb-5 text-center uppercase">Expediente Medico</h1>
                    <div class="flex gap-4 content-center mb-5">
                        <div class="border border-lime-300 rounded p-2 w-3/5 print:border-black">
                            <p>Nombre: <span>{{ $medicalRecord->name }}</span></p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-2/5 print:border-black">
                            <p>Fecha de Registro: 
                                <span>
                                    {{ \Carbon\Carbon::parse($medicalRecord->created_at)->locale('es')->setTimezone('America/Mexico_City')->translatedFormat('l j \de F \de Y h:i:s A') }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="flex gap-4 content-center mb-5">
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Edad:
                                <span>
                                    {{ $medicalRecord->age_eval }} años
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Genero:
                                <span>
                                    {{ $medicalRecord->gender_eval}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-2/5 print:border-black">
                            <p>Email:
                                <span>
                                    {{ $medicalRecord->email}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Teléfono:
                                <span>
                                    {{ $medicalRecord->phone }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4 content-center mb-5">
                        <div class="border border-lime-300 rounded p-2 w-1/2 print:border-black">
                            <p>Ciudad:
                                <span>
                                    {{ $medicalRecord->city }}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/2 print:border-black">
                            <p>Estado:
                                <span>
                                    {{ $medicalRecord->state_eval}}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4 content-center mb-5">
                        <div class="border border-lime-300 rounded p-2 w-1/4 print:border-black">
                            <p>Peso:
                                <span>
                                    {{ $medicalRecord->weight}} Kgs.
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/4 print:border-black">
                            <p>Talla/Estatura:
                                <span>
                                    {{ $medicalRecord->size}} mts.
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/4 print:border-black">
                            <p>IMC:
                                <span>
                                    {{ $medicalRecord->imc}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/4 print:border-black">
                            <p>Evaluación IMC:
                                <span>
                                    {{ $medicalRecord->imc_eval}}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4 content-center mb-5">
                        <div class="border border-lime-300 rounded p-2 w-1/2 print:border-black">
                            <p>Glucosa:
                                <span>
                                    {{ $medicalRecord->glucose }}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/2 print:border-black">
                            <p>Evaluación Glucosa:
                                <span>
                                    {{ $medicalRecord->glucose_eval }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-4 content-center mb-5">
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Ejercicio:
                                <span>
                                    {{ $medicalRecord->exercised_eval}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Comida Chatarra:
                                <span>
                                    {{ $medicalRecord->fast_food_eval}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Fuma:
                                <span>
                                    {{ $medicalRecord->smoking_eval}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Bebe Alcohol:
                                <span>
                                    {{ $medicalRecord->alcoholism_eval}}
                                </span>
                            </p>
                        </div>
                        <div class="border border-lime-300 rounded p-2 w-1/5 print:border-black">
                            <p>Usa Drogas:
                                <span>
                                    {{ $medicalRecord->drugs_eval}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 flex justify-end items-center">
                <button onclick="window.print()" class="border border-lime-300 p-2 rounded text-gray-100 uppercase text-sm hover:bg-lime-700 print:hidden">
                    Imprimir Expediente
                </button>
            </div>
        </div>
    </div>
</x-app-layout>