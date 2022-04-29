@extends ('components/layout')
@section ('content')

    <article>
        <h1><?= $post->title ?></h1> 

        <div><?= $post->body ?> </div>
       <a href="/categories/{{$post->category->slug}}"><p> {{ $post->category->name }}</p></a>
    </article>

    <a href="/">Go back</a>
@endsection