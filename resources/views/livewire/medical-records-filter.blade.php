<form wire:submit.prevent='searchByName' novalidate class="w-96 sm:w-full">
    <div class="mt-2 sm:flex sm:justify-end sm:items-center sm:p-0">
        <x-text-input id="name" class="sm:w-96 dark:text-slate-200 w-full sm:mb-0 mb-2 mr-2 p-2 flex" type="text"
            wire:model="name" wire:model.live="name" :value="old('name')" placeholder="Nombre del Paciente" />
        {{-- @error('name')
        <livewire:mostrar-alerta :message="$message" />
    @enderror --}}

        <button
            class="flex rounded w-full sm:w-48 border border-lime-500 dark:text-slate-200 hover:bg-lime-600 hover:text-white uppercase p-2 items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mx-1">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>

            Buscar
        </button>
    </div>
</form>
