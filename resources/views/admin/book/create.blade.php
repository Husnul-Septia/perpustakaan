@extends('admin.template.default')

@section('content')
	
	<div class="card">
		<div class="card-header">
           <h3 class="card-title">Tambah Data Penulis</h3>
        </div>

          <div class="card-body">
          <form action="{{route('admin.author.store') }}" method="POST">
          	@csrf

          	<div class="form-group @error('name') has-error @enderror">
          		<label>Nama</label>
          		<input type="text" name="name" class="form-control" placeholder="masukan nama penulis" value="{{ old('name') }}">
              @error('name')
                <span class="help-block">{{ $message }}</span>
              @enderror
          	</div>

          	<div class="form-group">          		
          		<input type="submit" value="Tambah" class="btn btn-primary">
          	</div>
          </form>
          </div>
	</div>
@endsection