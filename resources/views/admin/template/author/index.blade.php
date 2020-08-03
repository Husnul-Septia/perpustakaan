@extends('admin.template.default')

@section('content')
	<div class="card">
		<div class="card-header">
           <h3 class="card-title">Data Penulis</h3>
         </div>
        <div class="card-body">
		<table id="datatables" class="table table-sm">
			<thead>
                  <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                  </tr>
                  </thead>                 
		</table>
		 </div>
	</div>
@endsection

@push('scripts')
	<script type="text/javascript">
		$(function(){
			$('#datatables').DataTable({
				processing:true,
				serviceSide:true,
				ajax:'{{route('admin.author.data')}}',
				columns:[
					{data: 'id'},
					{data: 'name'}
				]
			});
		});
	</script>
@endpush