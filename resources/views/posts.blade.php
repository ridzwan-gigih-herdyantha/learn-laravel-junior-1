@extends('layouts.main')

@section('container')

        <h1 class="mb-5">Page Blog Post </h1>

    @foreach ($posts as $post )
    {{-- @dd($post); --}}

    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a class="text-decoration-none"     href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <b>By <a class="text-decoration-none" href=""> {{ $post->user->name }} </a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></b>
        <h5> {{ $post->excerpt }}</h5>
        <a class="text-decoration-none"     href="/posts/{{ $post->category->name }}">Read More ...</a>
    </article>        
    @endforeach


@endsection