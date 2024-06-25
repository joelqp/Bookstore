<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        // no hace falta crear una condicion para comprobar si hay fallo a menos que quiera manejar excepciones de manera mas robusta
        Author::create($request->all());
         return redirect()->route('authors.index')
                          ->with('success', 'Author created!');
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')
                         ->with('success', 'Author edited!');
    }

    public function destroy(Author $author)
    {
        //prinero asignar null a los libros de este author
        $author->delete();

        return redirect()->route('authors.index')
                         ->with('success', 'Author deleted!');
    }
}