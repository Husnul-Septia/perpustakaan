<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\BorrowHistory;

class DataController extends Controller
{
    public function authors(){

    	$authors = Author::orderBy('name','ASC');
    	return datatables()->of($authors)
    	 				   ->addColumn('action','admin.author.action')
    					   ->addIndexColumn()
    					   ->rawColumns(['action'])
    					   ->toJson();
    					   
    }

     public function books(){

      //with dan load di gunakan agar tidk terjadi perulangan query
    	// $books = Book::with('author')->orderBy('title','ASC');
      $books = Book::orderBy('title','ASC')->get();
      $books->load('author');

    	return datatables()->of($books)
    					   ->addColumn('author', function(Book $model){
    					   	return $model->author->name;
    					   })
    					   ->editColumn('cover', function(Book $model){
    					   	return '<img src ="' . $model->getCover() .'" height="150px"/>';
    					   })
    	 				   ->addColumn('action','admin.book.action')
    					   ->addIndexColumn()
    					   ->rawColumns(['cover','action'])
    					   ->toJson();
    					   
    }

    public function borrows(){
        $borrows = BorrowHistory::where('returned_at', null)->latest()->get();

        $borrows->load('user', 'book');
       
        return datatables()->of($borrows)                           
                          ->addColumn('user', function(BorrowHistory $model){
                            return $model->user->name;
                           })
                          ->addColumn('book_title', function(BorrowHistory $model){
                            return $model->book->title;
                           })
                          ->addColumn('action','admin.borrow.action')
                           ->addIndexColumn()
                           ->rawColumns(['action'])
                           ->toJson();
    }
}
