<!DOCTYPE html>
<html>

@include('admin.template.partial.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 <!-- Navbar -->
  
 @include('admin.template.partial.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.template.partial.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
     @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.template.partial.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.template.partial.script')
</body>
</html>
