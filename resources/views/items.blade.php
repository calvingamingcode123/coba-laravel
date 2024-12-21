@extends('layout.main')
@section('container')
    <h1>{{ $name }}</h1>
    <p>{{ $description }}</p>
    <script src="js/script.js"></script>
    <img src="img/{{ $img }}" alt="{{ $name }}" width="350">
@endsection
