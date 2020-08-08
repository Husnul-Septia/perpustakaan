<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Perpus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('admin.author.index')}}" class="nav-link">
              <i class="fa fa-user"></i>
              <p class="text">Penulis</p>
            </a>
          </li>         
           <li class="nav-item">
            <a href="{{route('admin.book.index')}}" class="nav-link">
              <i class="fa fa-book"></i>
              <p class="text">Buku</p>
            </a>
          </li>    
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-users"></i>
              <p class="text">User</p>
            </a>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>