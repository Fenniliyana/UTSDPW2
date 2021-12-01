<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.admin.section.assets')
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      @include('template.admin.section.sidebar')
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      @include('template.admin.section.header')
      <!-- End Navbar -->
      <div class="content" style="padding-top: 100px">
      @include('template.admin.utils.notif')
        <div class="card">
          @yield('content')
        </div>
      </div>
      <footer class="footer">
       @include('template.admin.section.footer') 
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
@include('template.admin.section.js')
</body>

</html>