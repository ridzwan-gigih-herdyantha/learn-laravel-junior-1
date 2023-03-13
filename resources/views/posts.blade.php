@extends('layouts.main')

@section('container')

@if ($posts->count())    
    <h1 class="mb-5">{{ $title }}</h1>
    <div class="card mb-3">
        <img src="https://source.unsplash.com/500x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h5 class="card-title fs-4"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug    }}">{{ $posts[0]->title }}</a></h5>
            <b>
                <small class="text-muted">
                    By <a class="text-decoration-none" href="/author/{{ $posts[0]->author->username }}"> {{ $posts[0]->author->name }} </a> in <a class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                       {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </b>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-primary"     href="/posts/{{ $posts[0]->slug }}">Read More</a>
        </div>
    </div>
@else
    <p class="text-center fs-4">No Post Found</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post )
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute  py-1 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.5);"><a  class="text-decoration-none text-white" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title"><a class="text-decoration-none"     href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                  <b>
                    <small class="text-muted">
                        By <a class="text-decoration-none" href="/author/{{ $post->author->username }}"> {{ $post->author->name }} </a>
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                </b>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            @endforeach
    </div>
</div>
{{-- @dd($post); --}}
    {{-- @foreach ($posts->skip(1) as $post )
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a class="text-decoration-none"     href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <b>By <a class="text-decoration-none" href="/author/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></b>
        <h5> {{ $post->excerpt }}</h5>
        <a class="text-decoration-none"     href="/posts/{{ $post->category->name }}">Read More ...</a>
    </article>        
    @endforeach --}}


@endsection