<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Disiplin-App v.1.0</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}" />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}"
    />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}"> -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{ asset('assets/js/select.dataTables.min.css') }}"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    @stack('styles')
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start"
        >
          <a class="navbar-brand brand-logo me-5" href="index.html"
            >Disiplin-App</a
          >
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              Repositori GitHub : <a href="https://github.com/zulkarnainzakaria07/disiplinApp" target="_blank">Klik Disini</a>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              
                Selamat Datang, Admin Aplikasi Penegakan Disiplin Siswa
            
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i> Settings
                </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i> Logout
                </a>
              </div>
            </li>
            <li class="nav-item nav-settings nav-profile dropdown">
            <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                id="profileDropdown"
              >
                <i class="icon-ellipsis"></i>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown"
                aria-labelledby="profileDropdown"
              >
                <a class="dropdown-item">
                  <i class="ti-settings text-primary"></i> Settings
                </a>
                <a class="dropdown-item">
                  <i class="ti-power-off text-primary"></i> Logout
                </a>
              </div>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kelas">
                <i class="mdi mdi-account-multiple-outline menu-icon"></i>
                <span class="menu-title">Kelas</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/siswa">
                <i class="mdi mdi-account-plus menu-icon"></i>
                <span class="menu-title">Siswa</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/guru">
                <i class="mdi mdi-auto-fix menu-icon"></i>
                <span class="menu-title">Guru</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pelanggaran">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title">Pelanggaran</span>
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/kasus">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title">Kasus</span>
              </a>
            </li>
            <hr>
            <li class="nav-item">
              <a class="nav-link" href="/about">
                <i class="mdi mdi-arrange-send-to-back menu-icon"></i>
                <span class="menu-title">About App</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright © 2024. Zulkarnain Zakaria-RPL 2024. All rights
                reserved.</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Aplikasi ini saya dedikasikan untuk SMK Negeri 1 Limboto
                <i class="ti-heart text-danger ms-1"></i
              ></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @stack('scripts')
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <!-- <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script> -->
    <script src="{{ asset('assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.select.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/Chart.roundedBarCharts.js') }}"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>
