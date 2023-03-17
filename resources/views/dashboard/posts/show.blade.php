@extends('dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">Page Detail Post </h1>
            <article class="mb-5 border-bottom">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success" ><span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my post</a>
                <a href="" class="btn btn-warning" ><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button onclick="return confirm('Are You Sure ?')" class="btn btn-danger border-0"><span data-feather="trash-2" ></span> Delete</button>
                </form>
                {{-- @dd($post->image) --}}
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
        </div>
    </div>
  </div>
</main>
@endsection