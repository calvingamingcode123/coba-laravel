@extends('layout.main')
@section('container')
@foreach ( $about as $about )
<article class="mb-5">
<h2>
    <a href="/about/{{ $about["slug"] }}">{{ $about["title"] }}</a></h2>
<h5>by: {{ $about["author"] }}</h5>
{{-- <p>{{ $about["body"] }}</p> --}}
</article>
@endforeach
@endsection
