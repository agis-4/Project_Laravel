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
                      <a href="{{ route('input_uk') }}"><button class="btn btn-success" data-toggle="modal" data-target="#addUser" style="float: right;">
                            <span class="btn-label">
                            <i class="material-icons">add</i>
                            </span>
                            Add Data
                      </button></a>
                  <h4 class="card-title ">List Data Undangan Keluarga</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <div class="material-datatables">
                      <table class="table table-striped color table" id="table_id">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat Lengkap</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                      <?php $counter = 1 ?>
                      @foreach($uk as $data)
                        <tr>
                          <td>{{$counter++}}</td>
                          <td>{{ $data->nama_lengkap_uk}}</td>
                          <td>{{ $data->alamat_lengkap_uk}}</td>
                          <td>{{ $data->nominal_uk}}</td>
                          <td>{{ $data->status_uk}}</td>
                          <td>
                              <a href="{{route('edit_uk',$data->id)}}">
                                <button type="button" class="btn btn-info btn-fab btn-fab-mini btn-round">
                                  <i class="material-icons">edit</i>
                                </button>
                              </a>
                              <a href="{{route('detail_uk',$data->id)}}">
                                <button type="button" class="btn btn-primary btn-fab btn-fab-mini btn-round"><i class="material-icons">visibility</i>
                                </button>
                              </a>
                              <a href="{{route('delete_uk',$data->id)}}">
                                <button type="button" class="btn btn-danger btn-fab btn-fab-mini btn-round">
                                  <i class="material-icons">delete</i>
                                </button>
                              </a>
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
<script>
    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

    <!-- javascript for detroying the Perfect Scrollbar -->
    $('.main-panel').perfectScrollbar('destroy');

    <!-- javascript for updating the Perfect Scrollbar when the content of the page is changing -->
    $('.main-panel').perfectScrollbar('update');
</script>
@endsection
