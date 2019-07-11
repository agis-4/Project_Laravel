@extends('template_1.home')

@section('content')
<div class="col-md-7">
     <div class="card">
        <div class="card-header card-header-primary">
        <span class="btn-label"> 
           <i class="material-icons">person</i>
           <i class="material-text">Add Data</i></span>
        </div>
        
    <div class="col-md-12">
        <form class="form-horizontal" action="{{ route('save_uk') }}" method="post">
        {{ csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1" class="bmd-label-floating">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap_uk" placeholder="masukan nama lengkap">
          </div>
          <div class="form-group">
            <label for="exampleTextarea" class="bmd-label-floating">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat_lengkap_uk" rows="3" placeholder="masukan alamat lengkap"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="bmd-label-floating">Nominal</label>
            <input type="text" class="form-control" name="nominal_uk" placeholder="masukan nominal">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="bmd-label-floating">Status</label>
            <input type="text" class="form-control" name="status_uk" placeholder="masukan status">
          </div>
          <div class="form-group">
            <a href="{{ route('index_uk') }}">
              <button type="button" class="btn btn-default">Cancel</button>
            </a>
              <button type="submit" class="btn btn-primary btn-raised">Submit</button>
          </div>
        </form>
    </div>
    </div>
</div>
@endsection
