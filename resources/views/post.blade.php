@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="mb-3">Page Detail Post </h1>
            <article class="mb-5 border-bottom">
                <h2>{{ $post->title }}</h2>
                <b>By <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></b>

                @if($post->image)
              <div style=" max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image ) }}" class="card-img-top  mt-3 img-fluid" alt="{{ $post->category->name }}">
              </div>
              @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top  mt-3 img-fluid" alt="{{ $post->category->name }}">
              @endif
                <article class="fs-6">
                    <p>{!! $post->body !!}</p>
                </article>
            </article>

            <a class="text-decoration-none " href="/posts"> Back to Posts </a>
        </div>
    </div>
</div>

@endsection