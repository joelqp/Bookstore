@extends('layout')

@section('title', 'Inicio')

@section('content')
    <h1> Home </h1>
    @foreach ( $description as $paragraph )
    <p>{{ $paragraph }}</p>
    @endforeach

@endsection
