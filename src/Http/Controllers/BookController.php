<?php

namespace De\BooksCrud\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use De\BooksCrud\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('bookscrud::index', compact('books'));
    }

    public function create()
    {
        return view('bookscrud::create');
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('bookscrud.index');
    }

    public function edit(Book $book)
    {
        return view('bookscrud::edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('bookscrud.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('bookscrud.index');
    }
}