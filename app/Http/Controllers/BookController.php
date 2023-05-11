<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $user = User::factory()->create();

        Book::create([
            'title' => $request->title,
            'user_id' => $user->id,
        ]);

        return to_route('books.index');
    }

    public function edit(Request $request, Book $book)
    {
        return view('books.edit', [
            'book' => $book,
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
        ]);

        return to_route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return to_route('books.index');
    }
}
