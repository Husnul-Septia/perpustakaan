@extends('frontend.templates.default')

@section('content')
	<h4>Detail Buku</h4>
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
			         <p>
			         	<i class="material-icons">book</i>:{{ $book->qty}}
			         </p>
			        </div>
			        <div class="card-action">
			          <a href="#" class="btn red accent-1 right waves-effect waves-lg">Pinjam Buku</a>
			        </div>
			      </div>
	    		</div>
	   		</div>	

<h5>Buku Pengarang dari {{ $book->author->name }} yang lainnya :</h5>

	   	<div class="row">

	   	@foreach( $book->author->books->shuffle()->take(4) as $book)
	   		@component('frontend.templates.component.card_book', ['book' => $book])
	   		@endcomponent
	   	@endforeach
	   	</div>
@endsection