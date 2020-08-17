<button href="{{route('admin.borrow.return', $model)}}" class="btn btn-info" id="return">Pengembalian</button>

<!-- dari sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$('button#return').on('click', function(e){
		e.preventDefault();

		var href = $(this).attr('href');

		Swal.fire({
			  title: 'Apakah Yakin Akan Mengembalikan?',
			  text: "Apakah yakin data sudah benar!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya, Data sudah di cek!'
			}).then((result) => {
			  if (result.value) {
			  	document.getElementById('updateForm').action=href;
				document.getElementById('updateForm').submit();
			    Swal.fire(
			      'Di kembalikan!',
			      'Berhasil Di kembalikan.',
			      'success'
			    )
			  }
			})		
	})
</script>