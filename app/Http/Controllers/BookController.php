<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\_books;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function books()
    {
        $books = Book::all();
        return view("books", ['books' => $books]);
    }

    public function create()
    {
        // _books::create([
        //     'name' => 'libro',
        //     'pages' => '21232',
        //     'year' => '2121',
        // ]);

        // dd('libri');
        $authors= Author::all();
        return view('addBooks', compact('authors'));
    }

    public function store(BookStoreRequest $request)
    {
        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('covers', 'public');
        } else {
            $image = 'public\assets\default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available-236105299.webp';
        }


        book::create([
            'name' => $request->input('name'),
            'pages' => $request->input('pages'),
            'year' => $request->input('year'),
            'image' => $image,
            'author_id' => $request->input('author_id')
        ]);

        return redirect()->route('libreria')->with('success', 'libro creato con successo');
    }

    public function show(book $book)
    {

        return view('show', ['book' => $book]);
    }

    public function edit(book $book)
    {

        return view('edit', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('covers', 'public');
        } else {
            $image = $book->image;
        }

        $book->update([
            'name' => $request->input('name'),
            'pages' => $request->input('pages'),
            'year' => $request->input('year'),
            'image' => $image
        ]);

        return redirect()->route('libreria')->with('success', 'libro modificato con successo');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('libreria')->with('success', 'libro canellato con successo');
    }
}
