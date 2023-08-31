
@extends('layouts/main')

@section('container')
    @foreach ($posts as $post)
    
            <h2><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <p>By : <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name}}</a></p>
            <p>{{ $post->excerpt }}</p>

            <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read More...</a>
        
    @endforeach
    

@endsection
