@extends('admin.template.default')

@section('content')
	
	<div class="card">
		<div class="card-header">
           <h3 class="card-title">Edit Data Buku</h3>
        </div>

          <div class="card-body">

          <form action="{{route('admin.book.update', $book) }}" method="POST" enctype="multipart/form-data">
          	@csrf
          	@method("PUT")

            <div class="form-group @error('title') has-error @enderror">
              <label>Nama</label>
              <input type="text" name="title" class="form-control" value="{{ old('title')  ?? $book->title}}" placeholder="masukan title">
                @error('title')
                <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group @error('description') has-error @enderror">
              <label>Deskripsi</label>
              <input type="text" name="description" class="form-control" value="{{ old('description')  ?? $book->description}}" placeholder="masukan nama penulis">
                @error('description')
                <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

            <div class="form-group @error('cover') has-error @enderror">
              <label>Cover</label>
              <input type="file" name="cover" id="cover" class="form-control">
              @error('cover')
                <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

             <div class="form-group @error('author_id') has-error @enderror">
              <label>Penulis</label>
              <select id="author_id" name="author_id" class="form-control select2">
                @foreach($authors as $author) 
                 <option value="{{ $author->id }}"
                 @if ($author->id === $book->author_id)
                    selected
                 @endif
                 >
                 {{$author->name}}</option>
                @endforeach
                
              @error('author_id')
                <span class="help-block">{{ $message }}</span>
              @enderror

              </select>
            </div>

            <div class="form-group @error('qty') has-error @enderror">
              <label>Qty</label>
              <input type="text" name="qty" class="form-control" value="{{ old('qty')  ?? $book->qty}}" placeholder="masukan qty">
                @error('qty')
                <span class="help-block">{{ $message }}</span>
              @enderror
            </div>

          	<div class="form-group">          		
          		<input type="submit" value="Update" class="btn btn-primary">
          	</div>
          </form>
          </div>
	</div>
@endsection

@push('select2css')
 <!-- bawaan bootsrap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@push('scripts')
  <script type="text/javascript" src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

  <script type="text/javascript">
    $('.select2').select2();
  </script>
@endpush