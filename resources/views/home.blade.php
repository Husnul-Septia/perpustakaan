@extends('frontend.templates.default')

@section('content')

        <h1>Buku Yang sedang di pinjam</h1>
        @foreach($books as $book)
        	<div class="col s12 m6">
	   			<div class="card horizontal hoverable">
			      <div class="card-image">
			        <img src="{{ $book->getCover() }}">
			      </div>
			      <div class="card-stacked">
			        <div class="card-content">
			        <h5>
			        	{{ $book->title }}
			        </h5>
			         <blockquote>
			         	 <p>{{ $book->description }}</p>
			         </blockquote>
			         <p>
			         	<i class="material-icons">person</i>:{{ $book->author->name }}
			         </p>			        
			        </div>
			       
			      </div>
	    		</div>
	   		</div>	
        @endforeach
        
@endsection