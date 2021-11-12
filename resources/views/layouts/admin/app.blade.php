<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connect</title>

        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset(asset('vendors/mdi/css/materialdesignicons.min.css'))}}">
        <link rel="stylesheet" href="{{asset(asset('vendors/flag-icon-css/css/flag-icon.min.css'))}}">
        <link rel="stylesheet" href="{{asset(asset('vendors/css/vendor.bundle.base.css'))}}">
        <link rel="shortcut icon" href="images/favicon.png" />

        <!-- style file -->
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <!-- Custom File -->
        <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">

    </head>
    <body>
        <!-- container-scroller -->
        <div class="container-scroller">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo" /></a>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="search-field d-none d-xl-block">
                        <form class="d-flex align-items-center h-100" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                                </div>
                                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-language dropdown d-none d-md-block">
                            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <div class="nav-language-icon">
                                    <i class="flag-icon flag-icon-us" title="us" id="us"></i>
                                </div>
                                <div class="nav-language-text">
                                    <p class="mb-1 text-black">English</p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                                <a class="dropdown-item" href="#">
                                    <div class="nav-language-icon mr-2">
                                        <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
                                    </div>
                                    <div class="nav-language-text">
                                        <p class="mb-1 text-black">Arabic</p>
                                    </div>
                                </a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">
                                    <div class="nav-language-icon mr-2">
                                        <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                                    </div>
                                    <div class="nav-language-text">
                                        <p class="mb-1 text-black">English</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <div class="nav-profile-img">
                                    <img src="images/faces/face28.png" alt="image">
                                </div>
                                <div class="nav-profile-text">
                                    <p class="mb-1 text-black">Henry Klein</p>
                                </div>
                            </a>
                            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="images/faces/face28.png" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                                        <span>Inbox</span>
                                        <span class="p-0">
                                            <span class="badge badge-primary">3</span>
                                            <i class="mdi mdi-email-open-outline ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                                        <span>Profile</span>
                                        <span class="p-0">
                                            <span class="badge badge-success">1</span>
                                            <i class="mdi mdi-account-outline ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span>Settings</span>
                                        <i class="mdi mdi-settings"></i>
                                    </a>
                                    <div role="separator" class="dropdown-divider"></div>
                                    <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                                        <span>Lock Account</span>
                                        <i class="mdi mdi-lock ml-1"></i>
                                    </a>
                                    <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                                        <span>Log Out</span>
                                        <i class="mdi mdi-logout ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="count-symbol bg-success"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                                        <p class="text-gray mb-0"> 1 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                                        <p class="text-gray mb-0"> 15 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                                    </div>
                                    <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                                        <p class="text-gray mb-0"> 18 Minutes ago </p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="mdi mdi-calendar"></i>
                                </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings"></i>
                                </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="mdi mdi-link-variant"></i>
                                </div>
                                </div>
                                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:../../partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                            <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <!-- Dashboard link -->

                        <!-- Icons -->
                        <li class="nav-item">
                            <a class="nav-link" href="pages/icons/mdi.html">
                            <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                            <span class="menu-title">Icons</span>
                            </a>
                        </li>
                        <!-- Icons link -->

                        <!-- Forms -->
                        <li class="nav-item">
                            <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                            <span class="menu-title">Forms</span>
                            </a>
                        </li>
                        <!-- End of forms -->

                        <!-- Tables -->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                                <span class="menu-title">Tables</span>
                            <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="tables">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html"> Basic Tables </a></li>
                                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html"> Datatable </a></li>
                            </ul>
                            </div>
                        </li>
                        <!-- End of tables -->

                        <!-- User pages -->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                            <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                            <span class="menu-title">User Pages</span>
                            <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
                            </ul>
                            </div>
                        </li>
                        <!-- End of User pages -->


                        <!-- Profile -->
                        <li class="nav-item sidebar-user-actions">
                            <div class="user-details">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <div class="d-flex align-items-center">
                                    <div class="sidebar-profile-img">
                                        <img src="images/faces/face28.png" alt="image">
                                    </div>
                                    <div class="sidebar-profile-text">
                                        <p class="mb-1">Henry Klein</p>
                                    </div>
                                </div>
                                </div>
                                <div class="badge badge-danger">3</div>
                            </div>
                            </div>
                        </li>
                        <!-- End of profile link -->

                        <!-- Setting -->
                        <li class="nav-item sidebar-user-actions">
                            <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                                <span class="menu-title">Settings</span>
                            </a>
                            </div>
                        </li>
                        <!-- End of setting link -->

                        <!-- Logout -->
                        <li class="nav-item sidebar-user-actions">
                            <div class="sidebar-user-menu">
                            <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                                <span class="menu-title">Log Out</span></a>
                            </div>
                        </li>
                        <!-- End of logout link -->
                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">




                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    <footer class="footer">
                        <div class="footer-inner-wraper">
                            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                            </div>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- End of container-scroller -->

        <!-- Scripts -->
        <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
        <script src="{{asset('admin/js/off-canvas.js')}}"></script>
        <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('admin/js/misc.js')}}"></script>

        <!-- Custom js -->
        <script src="{{asset('admin/js/custom.js')}}"></script>
    </body>
</html>




{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/adminlte.min.css')}}">

    @yield('styles')

    @if (app()->getLocale() == 'ar')
    <!-- RTL: style -->
        <link rel="stylesheet" href="{{asset('admin/css/bootstrap-rtl.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/adminlte-rtl.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/media-query-rtl.css')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo:400,700" >

        <style>
            body, h1, h2, h3, h4, h5, h6 {
                font-family: 'Cairo', sans-serif !important;
            }
        </style>
    @endif


</head>
<body class="hold-transition sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.include.navbar', ['setting' => \App\Models\Setting::where('id', 1)->first(['id'])])

    <!-- Sidebar -->
    @include('admin.include.sidebar', ['setting' => \App\Models\Setting::where('id', 1)->first(['id'])])

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('page_name')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb {{app()->getLocale() == 'ar' ? "float-sm-left" : "float-sm-right"}}">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                            @yield('breadcrumb-item')
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Footer -->
    @include('admin.include.footer', ['setting' => \App\Models\Setting::where('id', 1)->first(['web_name'])])


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/js/demo.js')}}"></script>

    @yield('scripts')
</body>
</html>




 --}}
