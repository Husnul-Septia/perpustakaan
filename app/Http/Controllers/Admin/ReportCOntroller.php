<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\User;

class ReportCOntroller extends Controller
{
    public function top_book(){

    	$books = Book::withCount('borrowed')
    			->orderBy('borrowed_count', 'desc')
    			// ->paginate(10);
    			->paginate(env('PAGINATION_ADMIN'));

    	return view('admin.Report.top_book',[
    		'books' => $books,
    		]);
    }

    public function top_user(){

    	$users = User::withCount('borrow')
    			->orderBy('borrow_count', 'desc')
    			// ->paginate(10);
    			->paginate(env('PAGINATION_ADMIN'));

    	return view('admin.Report.top_user',[
    		'users' => $users,
    		]);
    }
}
