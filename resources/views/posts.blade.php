@extends('layouts.main')

@section('container')

@if ($posts->count())    
    <h1 class="text-center mb-3">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name='category' value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name='author' value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Find Post Title" name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit" id="">Search</button>
            </div>
        </form>
    </div>
</div>

    <div class="card mb-3">
        <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <h5 class="card-title fs-4"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug    }}">{{ $posts[0]->title }}</a></h5>
            <b>
                <small class="text-muted">
                    By <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}"> {{ $posts[0]->author->name }} </a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                       {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </b>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post )
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute  py-1 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.5);"><a  class="text-decoration-none text-white" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title"><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                    <b>
                        <small class="text-muted">  
                            By <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}"> {{ $post->author->name }} </a>
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
    @else
    <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection