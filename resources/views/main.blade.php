<!DOCTYPE html>
<html lang="en">
@include('assets.links')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{url('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
  @include('assets.navbar')
  @include('assets.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('body')        
      </div>
    </section>
    <!-- /.content -->
  </div>
  @include('assets.footer')
</div>
@include('assets.scripts')
@stake('js')
</body>
</html>
