@extends('admin.template.default')

@section('content')
	<div class="card">
		
		<div class="card-header">
           <h3 class="card-title">Laporan User Teraktif</h3>
         </div>
        
        <div class="card-body">
		<table id="datatables" class="table table-sm">
			<thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Peminjaman</th>
                    <th>Bergabung</th>
                  </tr>
                  </thead>    
            <tbody>
            <?php
	            	$page = 1 ;
	            	if(request()->has('page')){
	            		$page = request('page');
	            	}

	            	//$no = (10 * $page) - (10 - 1);
	            	$no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') - 1);
	            ?>
	            @foreach($users as $user)
	            	<tr>
	            		<td>{{ $no++ }}</td>
	            		<td>{{ $user->name }}</td>
	            		<td>{{ $user->email }}</td>
	            		<td>{{ $user->borrow_count }}</td>
	            		<td>{{ $user->created_at }}</td>
	            	</tr>
	            @endforeach
            </tbody>             
		</table>
		{{ $users->links() }}
		 </div>
		
	</div>

	<form action="" method="POST" id="deleteForm">
	@csrf
	@method("DELETE")
	<input type="submit" name="Hapus" style="display: none">
</form>
@endsection
	