<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex w-1/2">
                {{ __('Menús del Grupo ') }} {{ $group_id }} de hasta {{ $max_factor }} kcal
            </h2>

            <div class="flex w-1/2 justify-end space-x-2 p-1 dark:text-gray-200">
                <button class="flex justify-center w-40 border rounded p-1 border-lime-500 hover:bg-lime-600 hover:text-white"
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
                @forelse ($recipes as $recipe)
                    <div
                        class="flex flex-col w-full dark:text-slate-200 border border-lime-400 rounded p-1 print:border-white print:text-sm">
                        <div class="flex flex-row mt-2 mb-2">
                            <div class="flex w-1/2 justify-start pl-2">
                                <p>{{ $recipe->name }}</p>
                            </div>
                            <div class="flex w-1/2 justify-end pr-2">
                                <p>Total: {{ $recipe->total_cal }} kcal</p>
                            </div>
                        </div>
                        <div class="w-full p-1">
                            @forelse (json_decode($recipe->tempos) as $tempo)
                                @php
                                    $desayuno = $tempo->name === 'Desayuno' ? 'text-slate-200 bg-green-700' : '';
                                    $col1 = $tempo->name === 'Colación Mañana' ? 'text-slate-200 bg-amber-700' : '';
                                    $comida = $tempo->name === 'Comida' ? 'text-slate-200 bg-teal-700' : '';
                                    $cena = $tempo->name === 'Cena' ? 'text-slate-200 bg-sky-700' : '';
                                    $col2 = $tempo->name === 'Colación Noche' ? 'text-slate-200 bg-violet-700' : '';
                                @endphp
                                <div @class([
                                    'border',
                                    'rounded',
                                    'mb-4',
                                    'p-2',
                                    'print:mb-2',
                                    $desayuno,
                                    $col1,
                                    $comida,
                                    $cena,
                                    $col2,
                                ])>
                                    <div class="flex w-full">
                                        <p class="uppercase bold text-sm flex w-3/6 justify-start">{{ $tempo->name }}
                                        </p>
                                        <p class="uppercase bold text-sm flex w-2/6 justify-start">Elementos</p>
                                        <p class="uppercase bold text-sm flex w-1/6 justify-end">Aporta</p>
                                    </div>
                                    @foreach ($tempo->items as $item)
                                        <div class="flex w-full">
                                            <div class="p-2 border-t flex w-3/6 justify-star">
                                                {{ $item->desc }}
                                            </div>
                                            <div class="p-2 border-t flex w-2/6 justify-star">
                                                {{ $item->quant }}
                                            </div>
                                            <div class="p-2 border-t flex w-1/6 justify-end">
                                                {{ $item->calories }} kcal
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-200">
                                    No existen elementos para mostrar en este momento.
                                </p>
                            @endforelse
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-200">
                        No existen menus para mostrar en este momento.
                    </p>
                @endforelse
            </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-layout>
