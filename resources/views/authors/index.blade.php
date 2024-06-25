@extends('layout')

@section('title', 'Authors')

@section('header')
<h1>Authors</h1>
@endsection


@section('content')
<!-- esta alerta esta vinculada a author -->
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
@endif
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Add Author</a>
    <table class="table mt-4 table-dark table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('authors.destroy', $book->id) }}" method="POST" style="display:inline;">
                            <!-- token para autentificar que el usuario es legitimo -->
                            @csrf

                            <!-- aunque el formulario es POST, se especifica el tipo de POST para Laravel -->
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
