<x-app-layout>
    <x-slot name="header">
        <div class="flex w-full items-center">
            <h2 class="font-semibold sm:text-xl text-gray-800 dark:text-gray-200 leading-tight flex w-1/2">
                {{ __('Complementos/Sustituciones ') }}
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
</x-app-layout>
