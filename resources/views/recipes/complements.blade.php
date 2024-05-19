<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full items-center">
            <h2 class="font-semibold sm:text-xl text-gray-800 dark:text-gray-200 leading-tight flex w-1/2">
                {{ __('Complementos/Sustituciones ') }} para {{ $category }}
            </h2>

            <div class="flex w-1/2 justify-end space-x-2 p-1 dark:text-gray-200">
                <button
                    class="flex justify-center w-40 border rounded p-1 border-lime-500 hover:bg-lime-600 hover:text-white"
                    onclick="window.print()">
                    Imprimir
                </button>
                <a href="{{ route('recetas') }}"
                    class="flex justify-center w-40 border rounded p-1 border-orange-500 hover:bg-orange-600 hover:text-white">
                    Regresar
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-slate-300"> --}}
            <div class="flex flex-col gap-4 content-center p-2 mt-4">
                <div class="w-full p-1">
                    <div class="border rounded mb-1 p-2 print:mb-1 border-lime-900">
                        <div class="flex w-full text-slate-200 border-b p-2">
                            <p class="uppercase bold text-sm flex w-3/6 justify-start">Nombre</p>
                            <p class="uppercase bold text-sm flex w-2/6 justify-start">Cantidad</p>
                            <p class="uppercase bold text-sm flex w-1/6 justify-end">Aporta</p>
                        </div>
                        @forelse ($complements as $complement)
                            @php
                                $alimento = $complement->category === 1 ? 'text-slate-200 bg-green-700' : '';
                                $bebida = $complement->category === 2 ? 'text-slate-200 bg-sky-700' : '';
                                $te = $complement->category === 3 ? 'text-slate-200 bg-teal-700' : '';
                            @endphp
                            {{-- <div @class(['border', 'rounded', 'mb-1', 'p-2', 'print:mb-2', 'flex', 'w-full', $alimento, $bebida, $te])> --}}
                                <div @class(['flex', 'w-full', 'text-slate-200', 'border-b', 'print:mb-0', $alimento, $bebida, $te])>
                                            <div class="p-2 print:p-0 flex w-3/6 justify-star">
                                                {{ $complement->name }}
                                            </div>
                                            <div class="p-2 print:p-0 flex w-2/6 justify-start">
                                                {{ $complement->value }}
                                            </div>
                                            <div class="p-2 print:p-0 flex w-1/6 justify-end">
                                                {{ $complement->kcal }} kcal
                                            </div>
                                        </div>
                            {{-- </div> --}}
                        @empty
                            <p class="p-3 text-center text-sm text-gray-200">
                                No existen menus para mostrar en este momento.
                            </p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
