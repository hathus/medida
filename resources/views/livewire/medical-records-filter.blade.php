<form wire:submit.prevent='searchByName' novalidate>

    <x-text-input id="name" class="w-96 text-slate-200" type="text" wire:model="name" wire:model.live="name"
        :value="old('name')" placeholder="Nombre del Paciente" />
    {{-- @error('name')
        <livewire:mostrar-alerta :message="$message" />
    @enderror --}}

    <button class="rounded w-48 border border-lime-500 text-slate-200 hover:bg-lime-600 uppercase p-2">Buscar</button>
</form>
