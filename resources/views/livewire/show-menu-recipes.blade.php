<div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-3 justify-center">
    @forelse ($categories as $category)
        @php
            $itm1 = $category->id === 1 ? 'border-sky-500 hover:bg-sky-700 active:bg-sky-700' : '';
            $itm2 = $category->id === 2 ? 'border-emerald-500 hover:bg-emerald-700' : '';
            $itm3 = $category->id === 3 ? 'border-pink-500 hover:bg-pink-700' : '';
            $itm4 = $category->id === 4 ? 'border-cyan-500 hover:bg-cyan-700' : '';
            $itm5 = $category->id === 5 ? 'border-blue-500 hover:bg-blue-700' : '';
        @endphp
        <button id="{{ $category->id }}"
        wire:click='category({{ $category->id }})'
        @class([
            'border',
            'p-2',
            'pr-4',
            'pl-4',
            'rounded',
            'text-slate-200',
            'uppercase',
            'w-48',
            'w-full',
            $itm1,
            $itm2,
            $itm3,
            $itm4,
            $itm5,
        ])>
            {{ $category->name }}
        </button>
    @empty
        <p class="p-3 text-center text-sm text-gray-200">
            No existen menus en este momento.
        </p>
    @endforelse
</div>
