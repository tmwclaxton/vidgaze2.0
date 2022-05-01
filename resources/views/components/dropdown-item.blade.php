@props(['active' => false])
@php
    $selectedClasses = ' bg-blue-500 text-white';
    $classes = 'block text-left px-3 text-xs leading-6 hover:bg-gray-300 focus:bg-gray-300';
    if ($active) $classes .= $selectedClasses;
@endphp
<a {{ $attributes (['class' => $classes]) }}>
{{ $slot }}
</a>
