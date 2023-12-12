<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2F5B68">
  <!-- Brand Logo -->
  
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    
</div>

<!-- Sidebar -->
<div class="sidebar">
    <div class="logo mt-5 text-center mb-1">
    <a class="">
        <img src="{{ asset('Template/docs/assets/img/approved.png') }}" alt="AdminLTE Logo" style=" width: 15%; height: 30%;">
        <span style=" font-size: 17px; color: white;"> PRESENSI SISWA </span>
    </a>
    </div>
    <div class="user-panel justify-content-center pt-0 mb-3 d-flex">
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            {{-- {{ Auth::user()->name }} --}}
            {{-- NEXT PEMBUATAN EDIT USER --}}
            {{-- {{ route('normal.edit', Auth::user()->id ) }} --}}
        </div>
    </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search" >
              <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                  aria-label="Search" >
              <div class="input-group-append">
                  <button class="btn btn-sidebar" >
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                  <a href="#" class="nav-link active">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Starter Pages
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                    @can('isGuru')
                      <li class="nav-item">
                          <a href="{{ route('presensi.create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Presensi</p>
                          </a>
                      </li>
                     <li class="nav-item">
                          <a href="{{ route('user.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Detail Presensi</p>
                          </a>
                      </li>
                    @endcan
                    @can('isAdmin' )
                      <li class="nav-item">
                          <a href="{{ route('presensi.create')}}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Presensi</p>
                          </a>
                      </li>
                     <li class="nav-item">
                          <a href="{{ route('user.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Detail Presensi</p>
                          </a>
                      </li>
                      @endcan
                      @can('isUser')
                      <li class="nav-item">
                        <a href="{{ route('presensi.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Presensi</p>
                        </a>
                      </li>
                     <li class="nav-item">
                      <a href="{{ route('presensi.index') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Data Presensi</p>
                      </a>
                  </li>
                  @endcan
                  </ul>
              </li>
              <li class="nav-item">
              </li>
              <li>
                  <form action="{{ route('auth.logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="nav-link btn btn-danger">Logout</button>
                  </form>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div><br><br><br><br><br><br><br><br><br><br><br><br>
  <!-- /.sidebar -->
</aside>

<aside class="control-sidebar control-sidebar-dark" style="background-color: #2F5B68">
  <!-- Control sidebar content goes here -->
  
</aside>