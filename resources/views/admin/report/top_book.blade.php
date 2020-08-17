@extends('admin.template.default')

@section('content')
	<div class="card">
		
		<div class="card-header">
           <h3 class="card-title">Laporan Buku Terlaris</h3>
         </div>
        
        <div class="card-body">
		<table id="datatables" class="table table-sm">
			<thead>
                  <tr>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Buku</th>
                    <th>Total Di Pinjam</th>
                    <th>Penulis</th>
                    <th>Sampul</th>                    
                  </tr>
                  </thead>    
            <tbody>

	            <?php
	            	$page = 1 ;
	            	if(request()->has('page')){
	            		$page = request('page');
	            	}

	            	//$no = (10 * $page) - (10 - 1); --> paginate jk 10,,

	            	// yg di bawah di setting pagination dr laravel
	            	$no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') - 1);
	            ?>
	            @foreach($books as $book)
	            	<tr>
	            		<td>{{ $no++ }}</td>
	            		<td>{{ $book->title }}</td>
	            		<td>{{ $book->description }}</td>
	            		<td>{{ $book->qty }}</td>
	            		<td>{{ $book->borrowed_count }}</td>
	            		<td>{{ $book->author->name }}</td>
	            		<td>
	            			<img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title }}">
	            		</td>
	            	</tr>
	            @endforeach
            </tbody>             
		</table>
		{{ $books->links() }}
		 </div>
		
	</div>

	<form action="" method="POST" id="deleteForm">
	@csrf
	@method("DELETE")
	<input type="submit" name="Hapus" style="display: none">
</form>
@endsection
	