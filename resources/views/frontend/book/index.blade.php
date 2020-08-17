@extends('frontend.templates.default')

@section('content')
	<h2>Koleksi Buku</h2>
    <blockquote><p class="flow-text">Koleksi Buku Yang Dapat Kamu Baca dan Pinjam</p></blockquote>
	   	<div class="row">
	   	@foreach( $books as $book)
	   		@component('frontend.templates.component.card_book', ['book' => $book])
	   		@endcomponent
	   	@endforeach
	   	</div>
	
        {{ $books->links('vendor.pagination.materialize') }}		
@endsection