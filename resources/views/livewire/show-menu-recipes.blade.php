<div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-3 justify-end">
    <div class="md:flex-col justify-stretch mb-0">
        <x-input-label class="uppercase" for="factor" :value="__('Consumo Calórico')" />
        <select id="factor" wire:model="factor" wire:model.live="factor" wire:change='changeFactor()'
            class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
            <option value="">-- Seleccione una dieta de --</option>
            @foreach ($activityFactor as $key => $answer)
                <option value="{{ $key }}">Hasta {{ $answer }} kcal</option>
            @endforeach
        </select>
        @error('factor')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>




    {{-- @forelse ($categories as $category)
        @php
            $itm1 = $category->id === 1 ? 'border-sky-500 hover:bg-sky-700 active:bg-sky-700' : '';
            $itm2 = $category->id === 2 ? 'border-emerald-500 hover:bg-emerald-700' : '';
            $itm3 = $category->id === 3 ? 'border-pink-500 hover:bg-pink-700' : '';
            $itm4 = $category->id === 4 ? 'border-cyan-500 hover:bg-cyan-700' : '';
            $itm5 = $category->id === 5 ? 'border-blue-500 hover:bg-blue-700' : '';
        @endphp
    @empty
        <p class="p-3 text-center text-sm text-gray-200">
            No existen menus en este momento.
        </p>
    @endforelse --}}
</div>
