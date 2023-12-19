<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        $books=Book::all();
        return view('books.index',compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $book=Book::create($request->all());
        return redirect ()->route('books.index')->with('success','Book created sucessfully!');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Books $book)
    {
        $book->update(Request $request->all());
        return redirect ()->route('books.index')->with('success','Book created sucessfully!');
    }

    public function destroy(Book $book)
    {
        $book->delete
    }
}
