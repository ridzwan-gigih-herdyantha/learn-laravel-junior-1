@extends('layouts.main')

@section('container')

<h1 class="mb-5">Page Detail Post </h1>

<article class="mb-5 border-bottom">
    <h2>{{ $post->title }}</h2>
    <b>By <a class="text-decoration-none" href="">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></b>
    <p>{!! $post->body !!}</p>
</article>

<a class="text-decoration-none " href="/posts"> Back to Posts </a>

@endsection