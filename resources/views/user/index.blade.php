@extends('template_1.home')


@section('content')
@if(session('status'))
    <div class="alert alert-success success-block">
        {{session('status')}}
    </div>
@endif


<div class="content">
   <div class="container-fluid">
       <div class="row">
          <div class="col-md-12">
              <div class="card">
                    <div class="card-header card-header-primary">
                      <a href="{{ route('add_user') }}"><button class="btn btn-success" data-toggle="modal" data-target="#addUser" style="float: right;">
                            <span class="btn-label">
                            <i class="material-icons">add</i>
                            </span>
                            Add Data
                      </button></a>
                  <h4 class="card-title ">List Data User</h4>
                  <p class="card-category">Data user yang sudah terdaftar pada aplikasi, 2019</p>
              </div>
                    <div class="card-body">
                        <div class="material-datatables">
                            <table class="table table-striped color table" id="table_id">
                            <thead class=" text-primary">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </thead>
                                <tbody>
                                <?php $counter = 1 ?>
                                @foreach($us as $data)
                                <tr>
                                  <td>{{$counter++}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->email}}</td>
                                  <td>{{$data->password}}</td>
                                  <td>
                                      <a href="{{route('edit_us',$data->id)}}"><button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round"><i class="material-icons">edit</i></button></a>
                                      <a href="{{route('detail_us',$data->id)}}"><button type="button" class="btn btn-primary btn-fab btn-fab-mini btn-round"><i class="material-icons">visibility</i></button></a>
                                      <a href="{{route('delete_us',$data->id)}}"><button type="button" class="btn btn-danger btn-fab btn-fab-mini btn-round"><i class="material-icons">delete</i></button></a>
                                  </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
              </div>
          </div>
       </div>
   </div>
</div>
@endsection

@section('js')
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
      console.log('ready');
} );
</script>
@endsection
