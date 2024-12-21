
@extends('layout.main')


@section('container')
<article>
      <h2>{{ $new_post["title"] }}</h2>
    <h5>{{ $new_post["author"] }}</h5>
    <p>{{ $new_post["body"] }}</p>

    <a href="/about">Go to home</a>
</article>
@endsection
