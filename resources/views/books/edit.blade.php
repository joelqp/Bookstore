@extends('layout')

@section('title', 'Edit Book')

@section('content')
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $book->title }}" required>
        </div>

        <div>
            <label for="author_id">Author:</label>
            <select id="author_id" name="author_id" required>
                <option value="">Select an author</option>
                @foreach ($authors as $author)
                <!-- si fallla la validacion, al recargarse se seleccione por defecto la opcion anterior -->
                <option value="{{ $author->id }}" {{ (old('author_id') ?: $book->author_id) == $author->id ? 'selected' : '' }}>
                {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
