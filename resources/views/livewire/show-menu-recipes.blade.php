<div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-3 justify-end">
    <div class="justify-stretch mb-0">
        <div class="grid grid-cols-2 gap-2">
            <div>
                <x-input-label class="uppercase" for="factor" :value="__('Consumo Calórico')" />
                <select id="factor" wire:model="factor" wire:model.live="factor" wire:change='changeFactor()'
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione una dieta de --</option>
                    @foreach ($activityFactor as $key => $answer)
                        <option value="{{ $key }}">de {{ $answer - 399 }} a {{ $answer }} kcal</option>
                    @endforeach
                </select>
                @error('factor')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>


            <div>
                <x-input-label class="uppercase" for="complement" :value="__('Complementos/Sustituciones')" />
                <select id="complement" wire:model="complement" wire:model.live="complement" wire:change='changeComplement()'
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione una opción --</option>
                    @foreach ($complementsMenu as $key => $complement)
                        <option value="{{ $key }}">{{ $complement }}</option>
                    @endforeach
                </select>
                @error('complement')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>
</div>
