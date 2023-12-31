
@extends('layout.mainlayout')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>
 @foreach ($contents as $content)
 <article class="mb-5">
 <h2>Judul : <a href="/content/{{ $content->slug }}" class="text-decoration-none">{{ $content->title }}</a></h2>
 <p>By <a href="/authors/{{ $content->author->username }}">{{ $content->author->name }}</a> <a href="/categories/{{ $content->category->slug }}">{{ $content->category->name }}</a> </p>
  {{-- <p>By Andreas Febri Hermawan in <a href="/categorie/{{ $content->slug }}">{{ $content->name }}</a> </p> --}}


</article>
 @endforeach
@endsection