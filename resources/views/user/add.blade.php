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
        <form class="form-horizontal" action="{{ route('save_us') }}" method="post">
        {{ csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1" class="bmd-label-floating">Name</label>
            <input type="text" class="form-control" name="name" placeholder="masukan name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="bmd-label-floating">Email</label>
            <input type="text" class="form-control" name="email" placeholder="masukan email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="bmd-label-floating">Password</label>
            <input type="password" class="form-control" name="password" placeholder="masukan password">
          </div>
          
          <div class="form-group">
            <a href="{{ route('index_us') }}">
              <button type="button" class="btn btn-default">Cancel</button>
            </a>
              <button type="submit" class="btn btn-primary btn-raised">Submit</button>
          </div>
        </form>
    </div>
    </div>
</div>
@endsection
