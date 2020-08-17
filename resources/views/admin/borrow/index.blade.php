@extends('admin.template.default')

@section('content')
	<div class="card">
		
		<div class="card-header">
           <h3 class="card-title">Data Peminjaman Buku</h3>
        </div>
        
        <div class="card-body">
		<table id="datatables" class="table table-sm">
			<thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>                 
		</table>
		 </div>
	</div>

	<form action="" method="POST" id="updateForm">
		@csrf
		@method("PUT")
		<input type="submit" name="Kembalikan" style="display: none">
	</form>
@endsection
	
@push('scripts')	
	@include('admin.borrow.alert')
	<script type="text/javascript">
		$(function(){
			$('#datatables').DataTable({
				processing:true,
				serviceSide:true,
				ajax:'{{route('admin.borrow.data')}}',
				columns:[
					{data: 'DT_RowIndex',orderable: false, searchable: false},
					{data: 'user'},
					{data: 'book_title'},
					{data: 'action'}
				]
			});
		});
	</script>
@endpush