@props(['img','name'])


<div class="aspect-video news col-span-2 bg-zinc-800 rounded-xl">
    <figure class="article rounded-xl h-full w-full">
        <img class="h-full w-full hover:blur-lg"
        src="{{$img}}" />
        <figcaption class="flex">
            <p class="text-xl font-semibold m-auto">{{$name}}</p>
        </figcaption>
    </figure>
</div>
