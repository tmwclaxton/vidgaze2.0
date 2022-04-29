@extends ('components/layout')

@section('content')

    @if (true)
    @foreach ($posts as $post) 
    <article>
        <a href="/posts/{{ $post->slug }}">
        <h1>
            
                {{ $post->title; }}
        </h1>
        </a>
        <?= $post->excerpt; ?>
    </article>
    @endforeach
    @endif
@endsection