@extends('admin.template.default')

@section('content')
	<div class="card">
		
		<div class="card-header">
           <h3 class="card-title">Data Penulis</h3>
           <a href="./author/create" class="btn btn-success">Tambah Penulis</a>
         </div>
        
        <div class="card-body">
		<table id="datatables" class="table table-sm">
			<thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Action</th>
                  </tr>
                  </thead>                 
		</table>
		 </div>
	</div>

	<form action="" method="POST" id="deleteForm">
		@csrf
		@method("DELETE")
		<input type="submit" name="Hapus" style="display: none">
	</form>
@endsection
	
@push('scripts')	
	@include('admin.author.alert')
	<script type="text/javascript">
		$(function(){
			$('#datatables').DataTable({
				processing:true,
				serviceSide:true,
				ajax:'{{route('admin.author.data')}}',
				columns:[
					{data: 'DT_RowIndex',orderable: false, searchable: false},
					{data: 'name'},
					{data: 'action'}
				]
			});
		});
	</script>
@endpush