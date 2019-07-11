@extends('template_1.home')

@section('content')
 <link rel="stylesheet" href="css/sidelogo.css">
  <link rel="stylesheet" href="css/sidew.css">
<div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                   <span class="btn-label"> 
	               <i class="material-icons">person</i>
	               <i class="material-text">Edit Data</i></span>
                </div>
                <div class="col-md-12">
                  <form class="form-horizontal" action="{{ route('save_edit_us') }}" method="post">
                    {{ csrf_field()}}
                    @foreach($us as $data)
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
                          <button type="submit" class="btn btn-primary btn-raised">Submit</button>
                      </div>
                      @endforeach
                    </form>
                  </div>
                </div>
              </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/us.jpg">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">App DU</h6>
                  <h4 class="card-title">{{ Auth::user()->name }}</h4>
                  <a href="{{ route('dashboard') }}" class="btn btn-primary btn-round">Dashboard</a>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection
