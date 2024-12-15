@extends('layouts.main')

@section('container')
    <h1>About Page</h1>
    <h3>Owner: {{ $nama }}</h3>
    <img src="img/burger.png" alt="{{ $nama }}" class="img-thumbnail rounded-circle">
@endsection