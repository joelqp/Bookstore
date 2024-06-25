@extends('layout')

@section('title', 'Añadir Book')
@section('header')
<h1>Create Book</h1>
@endsection
@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div>
            <label for="author_id">Author:</label>
            <select id="author_id" name="author_id" required>
                <option value="">Select an author</option>
                @foreach ($authors as $author)
                <!-- si fallla la validacion, al recargarse se seleccione por defecto la opcion anterior -->
                    <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection