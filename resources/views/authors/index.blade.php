@extends('layout')

@section('title', 'Autores')
@section('header')
ENCABEZAO
@endsection
@section('content')
    <h1>Autores</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary">Añadir Autor</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
