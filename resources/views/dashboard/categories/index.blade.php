@extends('dashboard.layouts.main')

@section('content') 
    <main class="col-md-6 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Category </h1>
        </div>
        
        @if(session()->has('success'))
          <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
          </div>
        @endif

        <div class="table-responsive col-md-6">
          <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $categories as $category )
                <tr>
                    {{-- @dd($category) --}}
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $category->slug }}"  class="badge bg-info">
                            <span data-feather="eye"></span>
                        </a>
                        <a href="/dashboard/categories/{{ $category->slug }}/edit"  class="badge bg-warning">
                            <span data-feather="edit"></span>
                        </a>
                        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button onclick="return confirm('Are You Sure ?')" class="badge bg-danger border-0"><span data-feather="trash-2" ></span></button>
                        </form>
                    </td>
                </tr>    
                @endforeach
              </tbody>
            </table>
          </div>
    </main>

@endsection