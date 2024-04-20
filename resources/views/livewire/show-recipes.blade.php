<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-slate-300">
            <div class="grid sm:grid-cols-2 gap-4 content-center p-4">
                @forelse ($recipes as $recipe)
                    <div class="flex flex-col w-full text-slate-200 border border-lime-400 rounded p-4">
                        <div class="flex flex-row mb-2">
                            <div class="flex w-1/2 justify-start">
                                <p>{{ $recipe->name }}</p>
                            </div>
                            <div class="flex w-1/2 justify-end pr-2">
                                <p>Total: {{ $recipe->total_cal }} calorías</p>
                            </div>
                        </div>
                        <div class="w-full">
                            @forelse (json_decode($recipe->tempos) as $tempo)
                            @php
                                $desayuno = $tempo->name === 'Desayuno' ? 'text-slate-200 bg-green-700' : '';
                                $col1 = $tempo->name === 'Colación Mañana' ? 'text-slate-200 bg-amber-700' : '';
                                $comida = $tempo->name === 'Comida' ? 'text-slate-200 bg-teal-700' : '';
                                $cena = $tempo->name === 'Cena' ? 'text-slate-200 bg-sky-700' : '';
                                $col2 = $tempo->name === 'Colación Noche' ? 'text-slate-200 bg-violet-700' : '';
                            @endphp
                                <div @class(['border', 'rounded', 'mb-4', 'p-2',
                                    $desayuno, $col1, $comida, $cena, $col2
                                ])>
                                    <p class="uppercase bold text-sm">{{$tempo->name}}</p>
                                    <div class="grid grid-cols-3">
                                        @foreach ($tempo->items as $item)
                                        <div class="p-2 border-t">
                                            {{ $item->desc }}
                                        </div>
                                        <div class="p-2 border-t">
                                            {{ $item->quant }}
                                        </div>
                                        <div class="p-2 border-t">
                                            <p>Aporta:</p>{{ $item->calories }} calorias
                                        </div>
                                    @endforeach
                                    </div>
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
        </div>
    </div>
</div>
