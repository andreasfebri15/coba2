
{{-- @extends('layout.mainlayout')

@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
 @foreach ($posts as $content)
 <article class="mb-5">
 <h2>Judul : <a href="/content/{{ $content->slug }}">{{ $content->title}}</a></h2>
 <h2>pengarang : {{ $content->excerpt }}</h2>
 <p>sinopsi : {{ $content->body }}</p>    
{{-- <h2><a href="/content{{ $content->id }}">{{ $content->title }}</a></h2>
<p>{{ $content->excerpt }}</p> --}}

{{-- </article>
 @endforeach
@endsection  --}}