@props(['trigger'])

<div x-data="{ show: false}" @click.away="show = false" class="w-full">

    {{-- Trigger --}}

    <div @click="show= !show">
        {{$trigger}}
    </div>

    {{-- Dropdown Links --}}
    <div x-show="show" class="max-h-52 overflow-auto py-2 absolute bg-gray-100 w-full mt-2 rounded-xl z-50" style="display:none;">

        {{$slot}}

    </div>

</div>
