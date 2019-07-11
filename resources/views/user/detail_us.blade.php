@extends('template_1.home')

@section('content')
<div class="col-md-6">
     <div class="card">
        <div class="card-header card-header-primary">
        <span class="btn-label"> 
           <i class="material-icons">person</i>
           <i class="material-text">Detail Data</i></span>
        </div>
        
    <div class="col-md-12">
        <form class="form-horizontal">
        {{ csrf_field()}}
        @foreach($show as $data)
        <input type="hidden" name="hidden_id" id="hidden_id" value="{{$data->id}}">
          <div class="form-group">
            <label for="exampleInputEmail1" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="bmd-label-floating">Email</label>
            <input type="text" class="form-control" name="email" value="{{$data->email}}">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1" class="bmd-label-floating">Password</label>
            <input type="password" class="form-control" name="password" value="{{$data->password}}">
          </div>
         
          <div class="form-group">
            <a href="{{ route('index_us') }}">
              <button type="button" class="btn btn-default">Cancel</button>
            </a>
          </div>
          @endforeach
        </form>
    </div>
    </div>
</div>
@endsection
