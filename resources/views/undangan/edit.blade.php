@extends('template_1.home')

@section('content')
<div class="col-md-6">
     <div class="card">
        <div class="card-header card-header-primary">
        <span class="btn-label"> 
           <i class="material-icons">person</i>
           <i class="material-text">Edit Data</i></span>
        </div>
        
           <div class="col-md-12">
                <form class="form-horizontal" action="{{ route('save_edit_up') }}" method="post">
                {{ csrf_field()}}
                @foreach($undangan as $data)
                <input type="hidden" name="hidden_id" id="hidden_id" value="{{$data->id}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="bmd-label-floating">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="{{$data->nama_lengkap}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1" class="bmd-label-floating">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="alamat_lengkap" value="{{$data->alamat_lengkap}}">
                  </div>
          
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="bmd-label-floating">Nominal</label>
                    <input type="text" class="form-control" name="nominal" value="{{$data->nominal}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" class="bmd-label-floating">Status</label>
                    <input type="text" class="form-control" name="status" value="{{$data->status}}">
                  </div>
                  <div class="form-group">
                    <a href="{{ route('index_up') }}">
                      <button type="button" class="btn btn-default">Cancel</button>
                    </a>
                      <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                  </div>
                  @endforeach
                </form>
            </div>
    </div>
</div>
@endsection
