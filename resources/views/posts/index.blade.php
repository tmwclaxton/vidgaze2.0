<x-layout>
@include('/posts/_header')
{{-- @include('posts._header') --}}



<main class="max-w-screen-2xl mx-auto mt-20 space-y-1">

<p class="font-bold text-xl mb-1">
    <a class=" text-indigo-700"
    href="">Categories</a> we think you will like</p>

    <div class=" sm:px-5 md:px-6">
        <div class="carousel rounded-box w-full py-10 pt-3">
            <x-carousel-component style="margin-left: 22px;" img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7BCDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8111CDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=82222DC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7B2fC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7BCDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8111CDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=82222DC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7B2fC2"></x-carousel-component>

        </div>
    </div>

<br>






    @if ($posts->count())
        <x-posts-grid :posts='$posts' />
        {{ $posts->links(); }}
    @else

    <p>No posts yet</p>

    @endif

</main>


</x-layout>

