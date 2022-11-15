<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="icon" href="{{ asset('frontendAsset') }}/images/sd.png" type="image/png" sizes="16x16" />

    <link href="{{ asset('dashboardAsset') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('dashboardAsset') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboardAsset') }}/css/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboardAsset') }}/back/css/editor.css">
    <link href="{{ asset('dashboardAsset') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboardAsset') }}/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dashboardAsset') }}/css/tagify.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('dashboardAsset') }}/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="{{ route('admin.dashboard') }}" class="logo">{{ env('APP_NAME') }}</a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li>
                    <a target="_blank" href="/" class="btn btn-primary mt-3">View Website</a>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('dashboardAsset') }}/images/users/user-1.png" alt="profile-user"
                            class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm">{{ Auth::user()->name }} <i
                                class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i
                                class="ti-user text-muted mr-2"></i>Add Admin</a>
                        <a class="dropdown-item" href="#"><i
                                class="ti-settings text-muted mr-2"></i> Settings</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="ti-power-off text-muted mr-2"></i>
                            Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile waves-effect waves-light">
                        <i class="ti-menu nav-icon"></i>
                    </button>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->


    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <ul class="metismenu left-sidenav-menu">
            <li class="@yield('dashboard')">
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Dashboard</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="#"><i
                                class="ti-control-record"></i>Users</a></li>
                </ul>
            </li>
            <li class="@yield('partners')">
                <a href="{{ route('partners.index') }}"><i class="ti-bar-chart"></i><span>Partners</span><span
                        class="menu-arrow"></span></a>
            </li>
            <li class="@yield('best_casino')">
                <a href="{{ route('best.index') }}"><i class="ti-bar-chart"></i><span>Best Casinos</span><span class="menu-arrow"></span></a>
            </li>
            <li class="@yield('online_casino')">
                <a href="{{ route('online.index') }}"><i class="ti-bar-chart"></i><span>Online Casinos</span><span class="menu-arrow"></span></a>
            </li>
            <li class="@yield('social')">
                <a href="{{ route('social.index') }}"><i class="ti-bar-chart"></i><span>Social</span><span class="menu-arrow"></span></a>
            </li>
            <li class="@yield('populer')">
                <a href="{{ route('populer.index') }}"><i class="ti-bar-chart"></i><span>Most Populer</span><span class="menu-arrow"></span></a>
            </li>
            <li class="@yield('location')">
                <a href="{{ route('location.index') }}"><i class="ti-bar-chart"></i><span>Location Populer</span><span class="menu-arrow"></span></a>
            </li>
            <li class="@yield('other_games')">
                <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Other Games</span><span
                        class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('other.index') }}"><i
                                class="ti-control-record"></i>Category</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('game.index') }}"><i
                                class="ti-control-record"></i>Games</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- end left-sidenav-->
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">

            <div class="container-fluid">
                @yield('dashboard_content')
            </div><!-- container -->

            <footer class="footer text-center text-sm-left">
                &copy; {{ Carbon\Carbon::now()->format('Y') }} Future Innovation LTD.
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->



    <!-- jQuery  -->
    <script src="{{ asset('dashboardAsset') }}/js/jquery.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/metismenu.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/waves.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/feather.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('dashboardAsset') }}/plugins/flot-chart/jquery.canvaswrapper.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/tagify.js"></script>
    <script src="{{ asset('dashboardAsset') }}/js/editor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('dashboardAsset') }}/js/app.js"></script>
    @yield('footerScript')

</body>

</html>