@props(['name'])


@switch($name)
    @case('nav_button')
        <button {{ $attributes->merge(['class' => 'mb-1 float-right
            inline-flex items-center p-2 text-sm
                text-gray-100 rounded-lg  hover:ring-gray-200 hover:ring-2
                focus:outline-none
                dark:text-gray-400 dark:hover:bg-gray-700
                dark:focus:ring-gray-600']) }} >
            {{$slot}}
        <button>

        @break
        @case('rect_button')
        {{-- used on comment section --}}
        <button type="button"
        {{ $attributes->merge(['class' => 'right-aligned  font-bold
            focus:ring-2
            focus:outline-none  rounded-sm text-sm px-5
            py-2.5  mb-2 uppercase']) }} >
            {{$slot}}
        </button>
        @break
    @default
@endswitch
