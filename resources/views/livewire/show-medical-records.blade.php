<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-lime-300">
            @forelse ($expedientes as $expediente)    
                <div class="p-6 text-gray-900 dark:text-gray-100 md:flex md:justify-between md:items-center border border-lime-300">
                    <div class="space-y-3 rounded-lg">
                        <a href="{{route('mostrar-expediente', $expediente->id)}}" class="font-bold">
                            {{ $expediente->name }}
                        </a>
                        <p>
                            Edad:
                            <span class="text-sm font-bold">
                                {{ floor($expediente->age->diffInYears(Carbon\Carbon::now())); }}
                                años
                            </span>
                        </p>
                        <p>Glucosa: 
                            <span class="text-sm font-bold {{ $expediente->glucose <= 120 ? 'text-lime-700' : 'text-red-700' }}">
                                {{ $expediente->glucose }} ->
                                {{ $expediente->glucose <= 120 ? 'Glucosa Controlada' : 'Glucosa Descontrolada' }}
                            </span>
                        </p>
                        <p>
                            IMC:
                            @if ($expediente->imc < 18.5)
                                <span class="text-sm font-bold text-blue-700">
                                    {{ round($expediente->imc, 2) }} 
                                    -> Bajo Peso
                                </span>
                            @elseif ($expediente->imc >= 18.5 && $expediente->imc <= 24.9)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
</svg>
                                <span class="text-sm font-bold text-lime-700">
                                    {{ round($expediente->imc, 2) }}
                                    -> Peso Normal
                                </span>
                            @elseif ($expediente->imc >=25 && $expediente->imc <= 29.9)
                                <span class="text-sm font-bold text-orange-700">
                                    {{ round($expediente->imc, 2) }}
                                    -> Sobrepeso
                                </span>
                            @else
                                <span class="text-sm font-bold text-red-700">
                                    {{ round($expediente->imc, 2) }}
                                    -> Obesidad
                                </span>
                            @endif
                        </p>
                    </div>

                    <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                        <a href="#"
                            class="py-2 px-4 rounded border border-amber-700 text-gray-100 hover:bg-amber-700  text-xs font-bold uppercase flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                            Citas Medicas
                        </a>
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
                    No existen expedientes en este momento.
                </p>
            @endforelse
        </div>
    </div>
    <div class="flex justify-center mt-10">
        {{ $expedientes->links() }}
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