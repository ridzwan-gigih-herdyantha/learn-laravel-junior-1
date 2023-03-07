@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>{!! $post->body !!}</p>
</article>

<a href="/posts"> Back to Posts </a>

@endsection