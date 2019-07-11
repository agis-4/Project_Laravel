
<ul class="nav">
          <li class="nav-item {{$page == 'DASHBOARD' ? 'active' : ''}} ">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{$page == 'USER'? 'active' : ''}}">
            <a class="nav-link" href="{{ route('index_us') }}">
              <i class="material-icons">person</i>
              <p>User Data</p>
            </a>
          </li>
          <li class="nav-item {{$page == 'UNDANGAN PRIBADI' ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('index_up') }}">
              <i class="material-icons">library_books</i>
              <p>Data Undangan Pribadi</p>
            </a>
          </li>
          <li class="nav-item {{$page == 'UNDANGAN KELUARGA' ? 'active' : ''}}">
            <a class="nav-link" href="{{ route('index_uk') }}">
              <i class="material-icons">library_books</i>
              <p>Data Undangan Keluarga</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">
              <i class="material-icons">exit_to_app</i>
              <p> Logout </p>
            </a>
          </li>
</ul>
