@extends('layouts.main')

@section('container')

    @foreach ($posts as $post )

    <article class="mb-5">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5> {{ $post->excerpt }}</h5>
    </article>        
    @endforeach


@endsection