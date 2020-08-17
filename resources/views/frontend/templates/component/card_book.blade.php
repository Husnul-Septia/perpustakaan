<div class="col s12 m6">
	<div class="card horizontal hoverable">
  <div class="card-image">
    <img src="{{ $book->getCover() }}" height="200px">
  </div>
  <div class="card-stacked">
    <div class="card-content">
    <h6>
    	<a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 30) }}</a>
    </h6>
      <p>{{ Str::limit($book->description, 80) }}</p>
    </div>
    <div class="card-action">
      <a href="{{ route('book.borrow', $book) }}" class="btn blue accent-1 right waves-effect waves-lg">Pinjam Buku</a>
    </div>
  </div>
</div>
</div>	