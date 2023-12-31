@extends('layout.mainlayout')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        {{-- eloqment relationship --}}
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-nonte">{{$post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
        <h5>{{ $post["excerpt"] }}</h5>
        <p>{{ $post["body"] }}</p>
        {{-- <h1 class="mb-5">{{ $post->title }}</h1>
        {!! $post->body !!} --}}
    </article>
    <a href="/content">back to content</a>
@endsection