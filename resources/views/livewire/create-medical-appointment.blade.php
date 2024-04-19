<form class="md:w-1/2 space-y-5" wire:submit.prevent="createMedicalAppointment" novalidate>
    {{-- Peso y Talla --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 justify-stretch mb-4">
                {{-- Peso --}}
                <x-input-label for="weight" :value="__('Peso')" class="uppercase" />
                <x-text-input id="weight" wire:model="weight" wire:model.live="weight" class="block mt-1 w-full" type="number" step="1"
                    min="0" :value="old('weight')" placeholder="ejemplo: 55"
                    wire:change="changeWeightEvent($event.target.value)" />
                    @error('weight')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
            </div>
            <div class="md:flex-col md:w-1/2">
                {{-- Talla o Altura --}}
                <x-input-label for="size" :value="__('Talla/Estatura')" class="uppercase" />
                <x-text-input id="size" wire:model="size" wire:model.live="size" class="block mt-1 w-full" type="number" step="0.01"
                    min="0" :value="old('size')" placeholder="ejemplo: 1.55"
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
                <x-text-input id="imc" wire:model="imc" wire:model.live="imc" class="block mt-1 w-full uppercase" type="text" :value="old('imc')"
                    placeholder="en espera de evaluación" value="{{ $imc }}" disabled />
                    @error('imc')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
            </div>
            {{-- Eval IMC --}}
            <div class="md:flex-col md:w-1/2">
                <x-input-label for="eval_imc" :value="__('evaluación de imc')" class="uppercase" />
                @php
                    $isBajoPeso = $eval_imc === 'Bajo Peso' ? true : false;
                    $isNormal = $eval_imc === 'Normal' ? true : false;
                    $isSobrepeso = $eval_imc === 'Sobrepeso' ? true : false;
                    $isObesidad = $eval_imc === 'Obesidad' ? true : false;
                @endphp
                <x-text-input id="eval_imc"
                    @class(['block', 'mt-1', 'w-full', 'uppercase', 
                    '!text-blue-500' => $isBajoPeso, 
                    '!text-lime-500' => $isNormal, 
                    '!text-orange-500' => $isSobrepeso,
                    '!text-red-500' => $isObesidad,
                    ])
                    type="text" :value="old('eval_imc')"
                    placeholder="en espera de evaluación" value="{{ $eval_imc }}" disabled />
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
                <x-text-input id="glucose" class="block mt-1 w-full uppercase" type="number" step="1"
                    min="0" wire:model="glucose" wire:model.live="glucose" :value="old('glucose')" placeholder="ejemplo: 95"
                    wire:change="changeGlucoseEvent($event.target.value)" />
                    @error('glucose')
                    <livewire:mostrar-alerta :message="$message" />
                    @enderror
            </div>

            <div class="md:flex-col md:w-1/2">
                {{-- glucosa evaluación --}}
                <x-input-label class="uppercase" for="glucose_eval" :value="__('Evaluación de Glucosa')" />
                <x-text-input id="glucose_eval" class="block mt-1 w-full uppercase {{$glucose_eval_color > 120 ? '!text-red-700' : '!text-lime-700'}}" type="text" :value="old('glucose_eval')"
                    value="{{ $glucose_eval }}" disabled placeholder="En espera de evaluación" />
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
        <select id="exercised" wire:model="exercised" wire:model.live="exercised" wire:change='changeExercisedEvent()'
            class="block mt-1 w-full uppercase border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm">
            <option value="">-- Seleccione una Opción --</option>
            @foreach ($physical_activity as $key => $answer)
                <option value="{{ $key }}">{{ $answer }}</option>
            @endforeach
        </select>
        @error('exercised')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    {{-- Tasa Metabolica Basal y Tasa Metabolica Total --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            {{-- Tasa Metabolica Basal --}}
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="tmb" :value="__('Metabolismo Basal')" />
                <x-text-input id="tmb" class="block mt-1 w-full uppercase" type="text" :value="old('tmb')"
                    value="{{ $tmb }}" disabled placeholder="En espera de evaluación" />
                @error('tmb')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>

            {{-- Tasa metabolica total --}}
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="tmt" :value="__('Calorias necesarias por día')" />
                <x-text-input id="tmt" class="block mt-1 w-full uppercase" type="text" :value="old('tmt')"
                    value="{{ $tmt }}" disabled placeholder="En espera de evaluación" />
                @error('tmt')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
        </div>
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

    {{-- Temperatura Corporal --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="body_temp" :value="__('Temperatura Corporal')" />
                <x-text-input id="body_temp" class="block mt-1 w-full" type="number" step="0.1"
                    wire:model="body_temp" wire:model.live="body_temp" :value="old('body_temp')"
                    placeholder="Temperatura Corporal"
                    wire:change="changeBodyTempEvent($event.target.value)" />
                @error('body_temp')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="eval_body_temp" :value="__('Evaluación de Temperatura')" />
                @php
                    $temp = $body_temp;
                    $baja = $temp < 35 ? true : false;
                    $normal = $temp >= 35 && $temp <= 37.5 ? true : false;
                    $febricula = $temp >= 37.6 && $temp <= 38 ? true : false;
                    $leve = $temp >= 38.1 && $temp <= 38.5 ? true : false;
                    $moderada = $temp >= 38.6 && $temp <= 39 ? true : false;
                    $alta = $temp >= 39.1 ? true : false;
                @endphp
                <x-text-input id="eval_body_temp"
                    @class(['block', 'mt-1', 'w-full', 'uppercase', 'bold',
                        '!text-blue-500' => $baja,
                        '!text-lime-500' => $normal,
                        '!text-yellow-600' => $febricula,
                        '!text-pink-600' => $leve,
                        '!text-orange-600' => $moderada,
                        '!text-red-600' => $alta,
                    ]) 
                    type="text" :value="old('eval_body_temp')" value="{{ $eval_body_temp }}" disabled
                    placeholder="En espera de evaluación" />
            </div>
        </div>
    </div>

    {{-- Presión Arterial --}}
    <div class="mt-4">
        <div class="md:flex md:flex-row md:justify-between md:space-x-3">
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="blood_pressure" :value="__('Presión Arterial')" />
                <x-text-input id="blood_pressure" class="block mt-1 w-full" type="text"
                    wire:model="blood_pressure" wire:model.live="blood_pressure" :value="old('blood_pressure')"
                    placeholder="Presión Arterial ejem. 120/80" pattern="[0-9]{3}/[0-9]"
                    wire:change="changeBloodPressureEvent($event.target.value)" />
                @error('blood_pressure')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror
            </div>
            <div class="md:flex-col md:w-1/2 mb-4">
                <x-input-label class="uppercase" for="eval_blood_press" :value="__('Evaluación Presión Arterial')" />
                <x-text-input id="eval_blood_press"
                    @class(['block', 'mt-1', 'w-full', 'uppercase', 'bold',
                        '!text-blue-500'    => $blue,
                        '!text-lime-500'    => $lime,
                        '!text-yellow-600'  => $yellow,
                        '!text-pink-600'    => $pink,
                        '!text-orange-600'  => $orange,
                        '!text-red-600'     => $red,
                    ]) 
                    type="text" :value="old('eval_blood_press')" value="{{ $eval_blood_press }}" disabled
                    placeholder="En espera de evaluación" />
            </div>
        </div>
    </div>

    {{-- Alergias --}}
    <div class="mt-4">
        <x-input-label class="uppercase" for="allergies" :value="__('Alergias')" />
        <x-text-input id="allergies" class="block mt-1 w-full" type="text" wire:model="allergies" wire:model.live="allergies" :value="old('allergies')"
            placeholder="Alergias del paciente" />
            @error('allergies')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
    </div>

    {{-- Diagnostico --}}
    <div class="mt-4">
        <x-input-label class="uppercase" for="diagnostic" :value="__('Diagnostico')" />
        <textarea wire:model="diagnostic" wire:model.live="diagnostic" id="diagnostic" cols="15" rows="5" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm" placeholder="Descripción del diagnostico realizado al paciente"></textarea>

        @error('diagnostic')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
    </div>

    {{-- Tratamiento --}}
    <div class="mt-4">
        <x-input-label class="uppercase" for="treatment" :value="__('Tratamiento')" />
        <textarea wire:model="treatment" wire:model.live="treatment" id="treatment" cols="15" rows="5" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-lime-500 dark:focus:border-lime-600 focus:ring-lime-500 dark:focus:ring-lime-600 rounded-md shadow-sm" placeholder="Descripción del tratamiento recomendado al paciente"></textarea>

        @error('treatment')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
    </div>

    <x-primary-button class="w-full justify-center mt-4">
        Registrar Consulta Medica
    </x-primary-button>
</form>
