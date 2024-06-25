@extends('layout')

@section('title', 'Autores')

@section('header')
@endsection


@section('content')
<!-- esta alerta esta vinculada a author -->
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
@endif
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
                            <!-- token para autentificar que el usuario es legitimo -->
                            @csrf

                            <!-- aunque el formulario es POST, se especifica el tipo de POST para Laravel -->
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
