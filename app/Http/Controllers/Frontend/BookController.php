<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;

class BookController extends Controller
{
    public function index()
    {	
    	$books = Book::paginate(10);

        return view('frontend.book.index',[
            'title' => 'Selamat Datang di Perpus',
            'books' => $books,
            ]);
    }

    public function show(Book $book)
    {
        $book->borrowed()->where('returned_at', null);
        
    	return view('frontend.book.show',[
            'title' => $book->title,
    		'book'=>$book,
    		]);
    }

    public function borrow(Book $book)
    {
        // BorrowHistory::create([
        //     'user_id' => auth()->id(),
        //     'book_id' => $book->id
        //     ]);
        // return 'Ok !';

        $user = auth()->user();
        
        if($user->borrow()                        
                        ->where('books.id', $book->id)
                        ->where('returned_at', null)
                        ->count() > 0){
            return redirect()->back()->with('toast', 'Kamu sudah meminjam buku ' . $book->title);
        }
        
        $user->borrow()->attach($book);
        $book->decrement('qty');

        return redirect()->back()->with('toast', 'berhasil meminjam buku');
    }
}
