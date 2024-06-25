@extends('layout')

@section('title', 'Inicio')
@section('header')
<h1> Home </h1>
@endsection
@section('content')
    @foreach ( $description as $paragraph )
    <p>{{ $paragraph }}</p>
    @endforeach

@endsection
