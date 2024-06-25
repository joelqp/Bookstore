@extends('layout')

@section('title', 'Editar Autor')

@section('header')
<h1>Edit Author</h1>
@endsection

@section('content')
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
