@extends('layouts/main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <h2 class="mb-3">{{ $post->title }}</h2>
            
            <p>By. <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            @if ($post->image)
              <div style="max-height: 350px; overflow:hidden;">
                <img src="/storage/{{ $post->image }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
              </div>
            @else
              <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-3 fs-6">
                {!! $post->body !!}
            </article>
            
            <a href="/blog" class="d-block mb-8">Back to posts</a>
        </div>
    </div>
</div>

@endsection