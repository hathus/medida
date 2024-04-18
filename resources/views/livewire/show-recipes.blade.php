<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-slate-300">
            <div class="grid sm:grid-cols-3 gap-4 content-center p-4">
                @forelse ($recetas as $receta)
                    @php
                        $itm1 = $receta->category_id === 1 ? 'border-sky-500' : '';
                        $itm2 = $receta->category_id === 2 ? 'border-emerald-500' : '';
                        $itm3 = $receta->category_id === 3 ? 'border-pink-500' : '';
                        $itm4 = $receta->category_id === 4 ? 'border-cyan-500' : '';
                        $itm5 = $receta->category_id === 5 ? 'border-blue-500' : '';
                    @endphp
                    <div @class([
                        'border',
                        'text-center',
                        'p-4',
                        'rounded',
                        $itm1,
                        $itm2,
                        $itm3,
                        $itm4,
                        $itm5,
                    ])>
                        <p class="text-slate-300 border-b mb-2">{{ $receta->name }}</p>
                        <p class="text-slate-300 text-sm">Recomendado para {{ $receta->group_kc }} calorías diarias</p>
                        @forelse (json_decode($receta->tempos) as $tempo)
                            <div class="grid grid-cols-2 gap-0">
                                <p class="text-slate-300 text-start border-t mt-2 mb-2">
                                    {{ $tempo->desc }}
                                </p>
                                <p class="text-slate-300 text-start border-t mt-2 mb-2">
                                    <span class="text-sm">*Cantidad: {{ $tempo->cant }}</span> </br>
                                    <span class="text-sm">*Calorías: {{ $tempo->calories }}</span>
                                </p>
                            </div>
                        @empty
                            <p class="p-3 text-center text-sm text-gray-200">
                                No existen menus en este momento.
                            </p>
                        @endforelse
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-200">
                        No existen menus en este momento.
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>
