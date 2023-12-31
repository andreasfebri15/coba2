
@extends('layout.mainlayout')

@section('container')
<h1 class="mb-5">Post Category </h1>
 @foreach ($categories as $category)
 <article class="mb-5">
    <ul>
        <li>
        <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </li>
    </ul>


{{-- <h2><a href="/content{{ $content->id }}">{{ $content->title }}</a></h2>
<p>{{ $content->excerpt }}</p> --}}

</article>
 @endforeach
@endsection