<x-layout>
@include('/posts/_header')
{{-- @include('posts._header') --}}



<main class="max-w-screen-2xl mx-auto mt-6 lg:mt-20 space-y-6">




        <div class="carousel rounded-box w-full py-10">
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7BCDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8111CDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=82222DC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7B2fC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7BCDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8111CDC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=82222DC2"></x-carousel-component>
            <x-carousel-component img="https://api.lorem.space/image/game?w=256&h=400&hash=8B7B2fC2"></x-carousel-component>

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

