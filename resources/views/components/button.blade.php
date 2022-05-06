@props(['name'])


@if ($name == 'nav_button')
    <button {{ $attributes->merge(['class' => 'mb-1 float-right
        inline-flex items-center p-2 text-sm
            text-gray-100 rounded-lg  hover:ring-gray-200 hover:ring-2
            focus:outline-none
            dark:text-gray-400 dark:hover:bg-gray-700
            dark:focus:ring-gray-600']) }} >
        {{$slot}}
    <button>
@endif
