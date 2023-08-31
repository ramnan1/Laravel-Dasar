@extends('dashboard.layouts.main')

@section('container')
    

<div class="container">
    <div class="row">
        <div class="col-lg-8 mb-5">
            <h2 class="mb-3">{{ $post->title }}</h2>
            
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All MyPost</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>

            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger" onclick="return confirm('are you sure')"><span data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($post->image)
              <div style="max-height: 300px; overflow:hidden;">
                <img src="/storage/{{ $post->image }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
              </div>
            @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            
            <a href="/dashboard/posts" class="d-block mb-8">Back to posts</a>
        </div>
    </div>
</div>

@endsection