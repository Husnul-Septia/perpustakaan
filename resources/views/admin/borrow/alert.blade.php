 <script type="text/javascript">

 @if (session('success'))
		
		$.notify({
	
	message: '{{ session('success') }}' 
		},{
	// settings
	type: 'success'
	});		
@endif

</script>