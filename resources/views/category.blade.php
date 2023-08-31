@extends('layouts/main')

@section('container')

<article mb-5>

    <h1 class="mb-5">Post Category : {{ $name }}</h1>
    @foreach ($posts as $post)
        <article class="mb-19 border-bottom">
        <a href="/post/{{ $post->slug }}">
            <h2>{{ $post->title }}</h2>
        </a>
        <h5>By : <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }} </a></h5>
        <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach

@endsection
