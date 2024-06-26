<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create', ['authors' => $authors]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author_id'=> 'required|exists:authors,id',
        ]);

        // no hace falta crear una condicion para comprobar si hay fallo a menos que quiera manejar excepciones de manera mas robusta
        Book::create([
            'title'=> $request->input('title'),
            'author_id'=> $request->input('author_id'),
                ]);



         return redirect()->route('books.index')
                          ->with('success', 'Book created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', ['book'=> $book, 'authors'=> $authors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {

        $request->validate([
            'title' => 'required',
            'author_id'=> 'required|exists:authors,id',
        ]);

        // no hace falta crear una condicion para comprobar si hay fallo a menos que quiera manejar excepciones de manera mas robusta
        $book->update([
            'title'=> $request->input('title'),
            'author_id'=> $request->input('author_id'),
                ]);

        return redirect()->route('books.index')
        ->with('success', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
                         ->with('success', 'Book deleted!');
    
    }
}
