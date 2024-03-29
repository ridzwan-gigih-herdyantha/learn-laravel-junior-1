@extends('dashboard.layouts.main')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create Posts </h1>
    </div>
<div class="col-lg-8 mb-5">
    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title </label>
          <input type="text" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus required>
          @error('title') 
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>        
        <div class="mb-3">
          <label for="slug" class="form-label">Slug </label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
          @error('slug') 
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>   

        <div class="mb-3">
          <label for="category" class="form-label">Category </label>
          <select class="form-select" name="category_id"  >
            @foreach ( $categories as $category )
            @if(old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
             @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif 
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Post Image</label>
          <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" onchange="previewImage()"> 
          <img class="img-preview img-fluid mt-2 col-sm-5">
          @error('image') 
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> 

        <div class="mb-3">
          <label for="body" class="form-label">Body </label>
          @error('body')
            <p class="text-danger"> {{ $message }} </p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body') }}">
          <trix-editor required input="body"></trix-editor>
        </div>


        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

</main>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    
    title.addEventListener('change' , function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    
    })

    function previewImage(){

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block' ;

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }

    }


</script>
@endsection