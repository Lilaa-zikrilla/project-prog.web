<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // //dd('berhasil masuk');
    public function book_view() {
        // untuk halaman menampilkan buku
        $data['allDataBook']=Book::all();
        return view('backend.book.view_book', $data);
    }

    public function book_add() {
        // untuk halaman tambah buku
        return view('backend.book.add_book');
    }

    public function book_query(Request $request) {
        // untuk halaman tambah buku query (proses)
        $validateData = $request->validate([
            'title' => 'required|unique:books',
        ]);

        $data = new Book();
        $data->title = $request->title;
        $data->author = $request->author;
        $data->save();

        return redirect()->route('book.view')->with('info', 'Book added successfully');
    }

    public function book_update($id) {
        // untuk halaman update buku
        $updateData = Book::find($id);
        return view('backend.book.update_book', compact('updateData'));
    }

    public function book_updating(Request $request, $id) {
        // untuk halaman tambah buku query (proses)
        $validateData = $request->validate([
            'title' => 'required',
        ]);

        $data = Book::find($id);
        $data->title = $request->title;
        $data->author = $request->author;
        $data->save();

        return redirect()->route('book.view')->with('info', 'Book update successfully');
    }

    public function book_delete($id) {
        // untuk halaman delete buku
        $deleteData = Book::find($id);
        $deleteData->delete();

        return redirect()->route('book.view')->with('info', 'Book delete successfully');
    }
}
