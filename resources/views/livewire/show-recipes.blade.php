<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-slate-300">
            <div class="grid sm:grid-cols-3 gap-4 content-center p-4">
                @forelse ($recipes as $recipe)
                    <div class="flex flex-col w-full dark:text-slate-200 border border-lime-400 rounded p-4">
                        <div class="flex flex-row mb-2">
                            <div class="flex w-1/2 justify-start">
                                <p>Grupo {{ $recipe->group_id }} de menús</p>
                            </div>
                            <div class="flex w-1/2 justify-end pr-2">
                                <p>hasta {{ $maxFactor }} kcal</p>
                            </div>
                        </div>
                        <button class="mt-2 w-full border border-orange-400 rounded p-1 hover:bg-orange-700 hover:text-white "
                            wire:click='showMenus({{$recipe->group_id}}, {{$maxFactor}})'
                        >
                            Mostrar
                        </button>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-200">
                        No existen menús para mostrar en este momento.
                    </p>
                @endforelse
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-10">
        {{ $recipes->links() }}
    </div>
</div>
