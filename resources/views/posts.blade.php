<x-layout>
@include('_posts-header')



<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    <x-large-post-card />


    <div class="lg:grid lg:grid-cols-2">

        <x-small-post-card />

 
    </div>

    <div class="lg:grid lg:grid-cols-3">
        <x-small-post-card />
        <x-small-post-card />
        <x-small-post-card />

    </div>
</main>


</x-layout>

{{-- @extends ('components/layout')

@section('content')

    @if (true)
    @foreach ($posts as $post) 
    <article>
        <a href="/posts/{{ $post->slug }}">
        <h1>
            
                {!! $post->title; !!}<!-- If you are in control of data otherwise --->
        </h1>
        </a>
        <?= //$post->excerpt; ?>
    
        <p> By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in
            <a href="/categories/{{$post->category->slug}}">
                {{ $post->category->name }}
            </a>
        </p>
    </article>
    @endforeach
    @endif
@endsection --}}