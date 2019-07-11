@extends('template_1.home')


@section('content')
<section class="content-header">
    <!--
        @if(isset(Auth::user()->email))
        <div class="alert alert-success success-block">
         <strong>Welcome {{ Auth::user()->name }}</strong>
         <br />
        </div>
       @endif
    -->
   <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Hallo :)</p>
                  <h4 class="card-title">{{Auth::user()->name}}
                    <small></small>
                  </h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">facebook</i>
                  </div>
                  <p class="card-category">Data Facebokk</p>
                  <h4 class="card-title">Agis Mutaqin</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">phone</i>
                  </div>
                  <p class="card-category">Number Contact</p>
                  <h4 class="card-title">082117905098</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-instagram"></i>
                  </div>
                   <p class="card-category">Data instagram</p>
                   <h4 class="card-title">@photoagis</h4>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div>
          </div>

   <div class="row">
       <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">List Data Undangan Pribadi</h4>
                  <p class="card-category">Data undangan pribadi yang sudah terdaftar pada aplikasi, 2019</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-striped color table" id="table_id">
                    <thead class="text-warning">
                      <tr>
                         <th>ID</th>
                         <th>Nama Lengkap</th>
                         <th>Alamat Lengkap</th>
                         <th>Nominal</th>
                         <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $counter = 1 ?>
                     @foreach($up as $data)
                      <tr>
                       <td>{{$counter++}}</td>
                       <td>{{$data->nama_lengkap}}</td>
                       <td>{{$data->alamat_lengkap}}</td>
                       <td>{{$data->nominal}}</td>
                       <td>{{$data->status}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
       </div>

       <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-rose">
                  <h4 class="card-title">List Data Undangan Pribadi</h4>
                  <p class="card-category">Data undangan pribadi yang sudah terdaftar pada aplikasi, 2019</p>
                </div>
                <div class="card-body table-responsive">
                 <table class="table table-striped color table" id="table_id2">
                    <thead class="text-rose">
                      <tr>
                         <th>ID</th>
                         <th>Nama Lengkap</th>
                         <th>Alamat Lengkap</th>
                         <th>Nominal</th>
                         <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $counter = 1 ?>
                     @foreach($uk as $data)
                      <tr>
                       <td>{{$counter++}}</td>
                       <td>{{$data->nama_lengkap_uk}}</td>
                       <td>{{$data->alamat_lengkap_uk}}</td>
                       <td>{{$data->nominal_uk}}</td>
                       <td>{{$data->status_uk}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
       </div>
   </div>
</section>
@endsection

@section('js')
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
      console.log('ready');
} );
</script>
<script>
  $(document).ready( function () {
    $('#table_id2').DataTable();
      console.log('ready');
} );
</script>
@endsection
