
<x-dropdown>

    <x-slot name="trigger">
        <button class="w-full lg:w-32 lg:inline-flex flex appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">

        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}

        <x-icon name="down-arrow" class="absolute pointer-events-none"/>
    </button>
    </x-slot>

    <x-dropdown-item href="/" :active="request()->routeIs('home')">View All</x-dropdown-item>
    @foreach ($categories as $category)
         <x-dropdown-item
            :active="isset($currentCategory) && $currentCategory->is($category)"
            href="/?category={{$category->slug}}">
            {{ucwords($category->name)}}

        </x-dropdown-item>
    @endforeach

    </x-dropdown>
