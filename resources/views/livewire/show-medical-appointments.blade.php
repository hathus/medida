<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-lime-300">
            @forelse ($medical_appointments as $medical_appointment)
                <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center border border-lime-300">
                    <div class="space-y-3 rounded-lg">
                        <p class="text-gray-200">Fecha de la Consulta: {{ \Carbon\Carbon::parse($medical_appointment->created_at)->locale('es')->setTimezone('America/Mexico_City')->translatedFormat('l j \de F \de Y') }}</p>
                        @php
                            $temp = $medical_appointment->body_temp;
                            $baja = $temp < 35 ? true : false;
                            $normal = $temp >= 35 && $temp <= 37.5  ? true : false;
                            $febricula = $temp >= 37.6 && $temp <= 38 ? true : false;
                            $leve = $temp >=38.1 && $temp <= 38.5 ? true : false;
                            $moderada = $temp >= 38.6 && $temp <=39 ? true : false;
                            $alta = $temp >= 39.1 ? true : false;
                        @endphp
                        <p>Temperatura Corporal: 
                            <span
                            @class(['text-sm', 'font-bold', 'flex justify-start', 'items-center',
                                'text-blue-500' => $baja,
                                'text-lime-500' => $normal,
                                'text-yellow-500' => $febricula,
                                'text-pink-500' => $leve,
                                'text-orange-500' => $moderada,
                                'text-red-500' => $alta,
                            ])
                            >
                                @if ($baja)
                                    Baja:
                                @elseif ($normal)
                                    Normal:
                                @elseif ($fevricula)
                                    Febrícula:
                                @elseif ($leve)
                                    Leve:
                                @elseif ($moderada)
                                    Moderada:
                                @else
                                    Alta:
                                @endif
                                {{$medical_appointment->body_temp}}
                            </span>
                        </p>
                        
                        <p>Glucosa: 
                            <span class="text-sm font-bold flex justify-start items-center {{ $expediente->glucose <= 120 ? 'text-lime-600' : 'text-red-600' }}">
                                @if ($expediente->glucose <= 120)
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-lime-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    {{ $expediente->glucose }} -> Glucosa Controlada
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.498 15.25H4.372c-1.026 0-1.945-.694-2.054-1.715a12.137 12.137 0 0 1-.068-1.285c0-2.848.992-5.464 2.649-7.521C5.287 4.247 5.886 4 6.504 4h4.016a4.5 4.5 0 0 1 1.423.23l3.114 1.04a4.5 4.5 0 0 0 1.423.23h1.294M7.498 15.25c.618 0 .991.724.725 1.282A7.471 7.471 0 0 0 7.5 19.75 2.25 2.25 0 0 0 9.75 22a.75.75 0 0 0 .75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 0 0 2.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384m-10.253 1.5H9.7m8.075-9.75c.01.05.027.1.05.148.593 1.2.925 2.55.925 3.977 0 1.487-.36 2.89-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398-.306.774-1.086 1.227-1.918 1.227h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 0 0 .303-.54" />
                                    </svg>
                                    {{ $expediente->glucose }} -> Glucosa Descontrolada
                                @endif
                            </span>
                        </p>
                        <p>
                            IMC:
                            @if ($expediente->imc < 18.5)
                                <span class="flex text-sm font-bold text-blue-600 justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-blue-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    {{ round($expediente->imc, 2) }} 
                                    -> Bajo Peso
                                </span>
                            @elseif ($expediente->imc >= 18.5 && $expediente->imc <= 24.9)
                                <span class="flex text-sm font-bold text-lime-600 justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-lime-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                                    </svg>
                                    {{ round($expediente->imc, 2) }}
                                    -> Peso Normal
                                </span>
                            @elseif ($expediente->imc >=25 && $expediente->imc <= 29.9)
                                <span class="flex text-sm font-bold text-orange-600 justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-orange-400">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                                    </svg>
                                    {{ round($expediente->imc, 2) }}
                                    -> Sobrepeso
                                </span>
                            @else
                                <span class="flex text-sm font-bold text-red-600 justify-start items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 text-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                                    </svg>
                                    {{ round($expediente->imc, 2) }}
                                    -> Obesidad
                                </span>
                            @endif
                        </p>
                        <p>Diagnostico: {{ $medical_appointment->treatment}}</p>
                    </div>

                    <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                        <a href="{{route('mostrar-expediente', $expediente->id)}}" class="py-2 px-4 rounded border border-green-700 text-gray-100 hover:bg-green-700  text-xs font-bold uppercase flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            Mostrar
                        </a>
                        <a href="{{ route('editar-expediente', $expediente->id) }}" class="border border-blue-700 py-2 px-4 rounded text-gray-100 hover:bg-blue-700 text-xs font-bold uppercase text-center flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                            Editar
                        </a>
                        <button class="border border-red-700 py-2 px-4 rounded text-gray-100 hover:bg-red-700 text-xs font-bold uppercase text-center flex items-center justify-center" wire:click="$dispatch('deleteAlertMedicalRecord', {{ $expediente->id }})">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6 mx-1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                            Eliminar
                        </button>
                    </div>
                </div>
            @empty
                <p class="p-3 text-center text-sm text-gray-200">
                    No existen consultas medicas en este momento para <span class="bold text-bold">{{$medical_record->name}}</span>.
                </p>
            @endforelse
        </div>
    </div>
    <div class="flex justify-center mt-10">
        
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Livewire.on('deleteAlertMedicalRecord', expedienteId => {
            Swal.fire({
                title: "¿Esta seguro de eliminar este expediente?",
                text: "Esta acción no podrá revertirse!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminarlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteMedicalRecord', { id: expedienteId });
                    Swal.fire({
                        title: "Expediente Eliminado!",
                        text: "El expediente ha sido eliminado.",
                        icon: "success"
                    });
                }
            });
        });
</script>
@endpush