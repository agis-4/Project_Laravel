<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/user.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <!-- <a href="#">
            <i class="fa fa-gear"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> -->
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-user"></i>Data Karyawan</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Undangan</a></li>
          </ul> -->
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
             <!--  <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
          <a href="#">
            <i class="fa fa-address-card"></i> <span>Master Undangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('index_up') }}"><i class="fa fa-user-plus"></i>Data Undangan Pribadi</a></li>
            <li><a href="{{ route('index_uk') }}"><i class="fa fa-user-plus"></i>Data Undangan Keluarga</a></li>
          </ul>
          <a href="{{ route('logout') }}">
            <i class="fa fa-power-off"></i> <span>Logout</span>
            <span class="pull-right-container">
              <!-- <i class="fa fa-angle-left pull-right"></i> -->
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
