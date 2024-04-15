<div class="py-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-lime-300">
            @forelse ($recetas as $receta)
                {{$receta->name}}
            @empty
                
            @endforelse
        </div>
    </div>
</div>
