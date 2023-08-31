@extends('layouts/main')

@section('container')
<h1 class="mb-3 text-center" >{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts" method="get">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit" id="search">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
          <div style="max-height: 400px; overflow:hidden;">
            <img src="/storage/{{ $posts[0]->image }}" class="card-img-top" alt="{{ $posts[0]->category->name }}" class="img-fluid">
          </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a class="text-decoration-none text-dark" href="/post/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                        By : <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name}}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a class="text-decoration-none btn btn-primary" href="/post/{{ $posts[0]->slug }}">Read More</a>
        </div>
    </div>

    <div class="container">
        <div class="row m-0">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 m-0">
                <div class="card">
                    <a href="/posts?category={{ $post->category->slug }}"><div class="position-absolute text-white px-3 py-2" style="background-color: rgba(0,0,0,0.7)"> {{ $post->category->name }}</div></a>
                    @if ($post->image)
                        <img src="/storage/{{ $post->image }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                    @else
                      <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                                    By : <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@else
<p class="text-center fs-4">Post Not Found</p>
@endif
<div class="d-flex justify-content-center">
{{ $posts->links() }}
</div>
@endsection
