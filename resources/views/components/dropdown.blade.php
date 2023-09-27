@props(['trigger'])

<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
    <div x-data="{ show: false}" @click.away="show = false">
        <button
            @click="show = ! show"
            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex"
        >
            {{ $trigger }}
        </button>
        <div x-show="show" class="absolute w-full z-50 overflow-auto max-h-52 py2 mt-2 bg-gray-100 rounded-xl" style="display: none;">
            {{ $slot }}
        </div>
    </div>
</div>