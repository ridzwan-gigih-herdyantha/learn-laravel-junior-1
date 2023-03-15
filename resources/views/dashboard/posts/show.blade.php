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
                <a href="" class="btn btn-danger" ><span data-feather="trash-2" class="align-text-bottom"></span> Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top  my-3 img-fluid" alt="{{ $post->category->name }}">
                <article class="fs-6">
                    <p>{!! $post->body !!}</p>
                </article>
            </article>

            <a class="text-decoration-none " href="/posts"> Back to Posts </a>
        </div>
    </div>
  </div>
</main>
@endsection