@props(['img','style'])


<div style="
@isset ($style)
    {{$style}}
@endisset

" class="hover:cursor-pointer courser carousel-item shine w-1/3 md:w-1/4 lg:w-1/6 mx-1 md:mx-3
carousel-item-effect rounded-xl ">
    <img src="{{$img}}"
    class="w-full rounded-xl " />

  </div>
