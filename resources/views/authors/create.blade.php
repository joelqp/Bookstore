@extends('layout')

@section('title', 'Añadir Autor')
@section('header')
<h1>Add Author</h1>
@endsection

@section('content')
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
