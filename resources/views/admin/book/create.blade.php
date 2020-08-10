@extends('admin.template.default')

@section('content')
	
	<div class="card">
		<div class="card-header">
           <h3 class="card-title">Tambah Data Penulis</h3>
        </div>

          <div class="card-body">
          <form action="{{route('admin.book.store') }}" method="POST" enctype="multipart/form-data">
          	@csrf

          	<div class="form-group @error('title') has-error @enderror">
          		<label>Judul</label>
          		<input type="text" name="title" class="form-control" placeholder="masukan judul buku" value="{{ old('title') }}">
              @error('title')
                <span class="help-block">{{ $message }}</span>
              @enderror
          	</div>

            <div class="form-group @error('description') has-error @enderror">
              <label>Description</label>
              <textarea id="description" name="description" rows="3" class="form-control" placeholder="tuliskan deskripsi buku">{{ old('description') }}</textarea> 
              @error('description')
                <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group @error('author_id') has-error @enderror">
              <label>Penulis</label>
              <select id="author_id" name="author_id" class="form-control select2">
                @foreach($authors as $author) 
                 <option value="{{ $author->id}}">{{$author->name}}</option>
                @endforeach
                
              @error('author_id')
                <span class="help-block">{{ $message }}</span>
              @enderror

              </select>
            </div>

             <div class="form-group @error('cover') has-error @enderror">
              <label>Cover</label>
              <input type="file" name="cover" id="cover" class="form-control">
              @error('cover')
                <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group @error('qty') has-error @enderror">
              <label>Jumlah</label>
              <input type="text" name="qty" class="form-control" placeholder="masukan qty" value="{{ old('qty') }}">
              @error('qty')
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

@push('select2css')
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('scripts')
  <script type="text/javascript" src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

  <script type="text/javascript">
    $('.select2').select2();
  </script>
@endpush