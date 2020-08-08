<a href="{{route('admin.book.edit', $model)}}" class="btn btn-warning" id="edit">Edit</a>
<button href="{{route('admin.book.destroy', $model)}}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$('button#delete').on('click', function(e){
		e.preventDefault();

		var href = $(this).attr('href');

		Swal.fire({
			  title: 'Apakah Yakin Hapus Data ini?',
			  text: "Data yang Di Hapus Tidak Bisa Di Kembalikan!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Ya, Hapus Saja!'
			}).then((result) => {
			  if (result.value) {
			  	document.getElementById('deleteForm').action=href;
				document.getElementById('deleteForm').submit();
			    Swal.fire(
			      'Terhapus!',
			      'Berhasil Di Hapus.',
			      'success'
			    )
			  }
			})		
	})
</script>