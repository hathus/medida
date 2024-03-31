<form class="md:w-1/2 space-y-5" wire:submit.prevent="editMedicalRecord" novalidate>
    {{-- Nombre del paciente --}}
    <div class="mt-4">
        <x-input-label class="uppercase" for="name" :value="__('Nombre')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" wire:model.live="name"
            :value="old('name')" placeholder="Nombre Completo del Paciente" />
        @error('name')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Email del paciente --}}
    <div class="mt-4">
        <x-input-label class="uppercase" for="email" :value="__('Correo Electrónico')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" wire:model.live="email"
            :value="old('email')" placeholder="example@example.com" />
        @error('email')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Teléfono Genero --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="flex-col md:w-1/2 justify-stretch mb-4">
                {{-- teléfono --}}
                <x-input-label class="uppercase" for="phone" :value="__('Teléfono')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" placeholder="0000000000"
                    wire:model="phone" wire:model.live="phone" :value="old('phone')" />
                @error('phone')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="flex-col md:w-1/2 justify-stretch mb-4">
                {{-- genero de nacimiento --}}
                <x-input-label class="uppercase" for="gender" :value="__('Genero de Nacimiento')" />
                <select id="gender" wire:model="gender" wire:model.live="gender"
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione un Genero --</option>
                    @foreach ($gender_list as $key => $gender)
                    <option value="{{ $key }}">{{ $gender }}</option>
                    @endforeach
                </select>
                @error('gender')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- Edad y Edad Calculo --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 justify-stretch mb-4">
                {{-- fecha de nacimiento --}}
                <x-input-label class="uppercase" for="age" :value="__('Fecha de Nacimiento')" />
                <x-text-input id="age" class="block mt-1 w-full" type="date" wire:model="age" wire:model.live="age"
                    wire:change="changeAgeEvent($event.target.value)" :value="old('age')" />
                @error('age')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="md:flex-col md:w-1/2">
                {{-- Calcúlo de edad--}}
                <x-input-label class="uppercase" for="age_eval" :value="__('Edad (Años)')" />
                <x-text-input id="age_eval" class="block mt-1 w-full uppercase" type="tel"
                    placeholder="En espera de evaluación" wire:model="age_eval" wire:model.live="age_eval"
                    :value="old('age_eval')" disabled />
                @error('age_eval')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- Ciudad y Estado --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 justify-stretch mb-4">
                {{-- ciudad --}}
                <x-input-label class="uppercase" for="city" :value="__('Ciudad')" />
                <x-text-input id="city" class="block mt-1 w-full uppercase" type="text" wire:model="city"
                    wire:model.live="city" :value="old('city')" placeholder="Ciudad o Municipio" />
                @error('city')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="md:flex-col md:w-1/2">
                {{-- estado --}}
                <x-input-label class="uppercase" for="state" :value="__('Estado')" />
                <select id="state" wire:model="state" wire:model.live="state"
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione un Estado --</option>
                    @foreach ($mexican_states as $key => $state)
                    <option value="{{ $key }}">{{ $state }}</option>
                    @endforeach
                </select>
                @error('state')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- Peso y Talla --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 justify-stretch mb-4">
                {{-- Peso --}}
                <x-input-label for="weight" :value="__('Peso')" class="uppercase" />
                <x-text-input id="weight" wire:model="weight" wire:model.live="weight" class="block mt-1 w-full"
                    type="number" step="1" min="0" :value="old('weight')" placeholder="ejemplo: 55"
                    wire:change="changeWeightEvent($event.target.value)" />
                @error('weight')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <div class="md:flex-col md:w-1/2">
                {{-- Talla o Altura --}}
                <x-input-label for="size" :value="__('Talla/Estatura')" class="uppercase" />
                <x-text-input id="size" wire:model="size" wire:model.live="size" class="block mt-1 w-full" type="number"
                    step="0.01" min="0" :value="old('size')" placeholder="ejemplo: 1.55"
                    wire:change="changeSizeEvent($event.target.value)" />
                @error('size')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- IMC Calculos --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            {{-- IMC --}}
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label for="imc" :value="__('IMC (Índice de Masa Corporal)')" class="uppercase" />
                <x-text-input id="imc" wire:model="imc" wire:model.live="imc" class="block mt-1 w-full uppercase"
                    type="text" :value="old('imc')" placeholder="en espera de evaluación" value="{{ $imc }}" disabled />
                @error('imc')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            {{-- Eval IMC --}}
            <div class="md:flex-col md:w-1/2">
                <x-input-label for="eval_imc" :value="__('evaluación de imc')" class="uppercase" />
                <x-text-input id="eval_imc" class="block mt-1 w-full uppercase {{ $eval_imc_color }}" type="text"
                    :value="old('eval_imc')" placeholder="en espera de evaluación" value="{{ $eval_imc }}" disabled />
                @error('eval_imc')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- Glucosa --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 mb-4">
                {{-- glucosa --}}
                <x-input-label class="uppercase" for="glucose" :value="__('Nivel de Glucosa')" />
                <x-text-input id="glucose" class="block mt-1 w-full uppercase" type="number" step="1" min="0"
                    wire:model="glucose" wire:model.live="glucose" :value="old('glucose')" placeholder="ejemplo: 95"
                    wire:change="changeGlucoseEvent($event.target.value)" />
                @error('glucose')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            <div class="md:flex-col md:w-1/2">
                {{-- glucosa evaluación --}}
                <x-input-label class="uppercase" for="glucose_eval" :value="__('Evaluación de Glucosa')" />
                <x-text-input id="glucose_eval"
                    class="block mt-1 w-full uppercase {{$glucose_eval_color > 120 ? '!text-red-700' : '!text-lime-700'}}"
                    type="text" :value="old('glucose_eval')" value="{{ $glucose_eval }}" disabled
                    placeholder="En espera de evaluación" />
                @error('glucose_eval')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- Ejercicio --}}
    <div class="mt-4">
        {{-- ejercicio --}}
        <x-input-label class="uppercase" for="exercised" :value="__('¿Realiza una actividad fisica?')" />
        <select id="exercised" wire:model="exercised" wire:model.live="exercised"
            class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
            <option value="">-- Seleccione una Opción --</option>
            @foreach ($periodic_habits as $key => $answer)
            <option value="{{ $key }}">{{ $answer }}</option>
            @endforeach
        </select>
        @error('exercised')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Comida chatarra y Cigarro --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="fast_food" :value="__('¿Consume comida chatarra?')" />
                <select id="fast_food" wire:model="fast_food" wire:model.live="fast_food"
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione una Opción --</option>
                    @foreach ($periodic_habits as $key => $answer)
                    <option value="{{ $key }}">{{ $answer }}</option>
                    @endforeach
                </select>
                @error('fast_food')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <div class="md:flex-col md:w-1/2">
                <x-input-label class="uppercase" for="smoking" :value="__('¿Tiene el hábito de fumar?')" />
                <select id="smoking" wire:model="smoking" wire:model.live="smoking"
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione una Opción --</option>
                    @foreach ($periodic_habits as $key => $answer)
                    <option value="{{ $key }}">{{ $answer }}</option>
                    @endforeach
                </select>
                @error('smoking')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>

    {{-- Alcohol y Drogas --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="alcoholism" :value="__('¿Tiene el hábito de beber alcohol?')" />
                <select id="alcoholism" wire:model="alcoholism" wire:model.live="alcoholism"
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione una Opción --</option>
                    @foreach ($periodic_habits as $key => $answer)
                    <option value="{{ $key }}">{{ $answer }}</option>
                    @endforeach
                </select>
                @error('alcoholism')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <div class="md:flex-col md:w-1/2">
                <x-input-label class="uppercase" for="drugs" :value="__('¿Consume alguna droga?')" />
                <select id="drugs" wire:model="drugs" wire:model.live="drugs"
                    class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
                    <option value="">-- Seleccione una Opción --</option>
                    @foreach ($periodic_habits as $key => $answer)
                    <option value="{{ $key }}">{{ $answer }}</option>
                    @endforeach
                </select>
                @error('drugs')
                <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
    </div>
    <x-primary-button class="w-full justify-center mt-4">
        Actualizar Expediente
    </x-primary-button>
</form>