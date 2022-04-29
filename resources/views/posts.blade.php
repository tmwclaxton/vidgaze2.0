@extends ('components/layout')

@section('content')

    @if (true)
    @foreach ($posts as $post) 
    <article>
        <a href="/posts/{{ $post->slug }}">
        <h1>
            
                {!! $post->title; !!}<!-- If you are in control of data otherwise --->
        </h1>
        </a>
        <?= $post->excerpt; ?>
    </article>
    @endforeach
    @endif
@endsection