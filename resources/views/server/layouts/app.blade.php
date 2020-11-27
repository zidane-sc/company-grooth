<!DOCTYPE html>
<html lang="en">

<head>
    @include('server.layouts.head')
    @yield('style')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('server.layouts.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/admin/dashboard') }}" class="brand-link">
                <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Grooth</span>
            </a>

            <!-- Sidebar -->
            @include('server.layouts.sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('server.layouts.content')
        </div>
        <!-- /.content-wrapper -->
        @include('server.layouts.footer')

    </div>
    <!-- ./wrapper -->

    @include('server.layouts.script')
    @yield('script')
</body>
</html>