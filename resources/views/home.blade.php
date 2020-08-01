@extends('layouts.app')

@section('content')

<form class="form-horizontal form-label-left" action="/cek" method="post" id="formfisio" data-parsley-validate onsubmit="return checkFormFisio()">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">nomer</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" name="telp" id="telp" value="" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">create
                                </button>
                            </div>
                        </div>

                   
                    <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hasil">Hasil </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="hasil" class="form-control col-md-7 col-xs-12" name="hasil" placeholder=""></textarea>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
</form>
<script type="text/javascript">
function checkFormFisio(){
      var telp        = $('#telp').val();
      var str         = telp.substring(0,2);

      alert(str);
    }

</script>
@endsection
