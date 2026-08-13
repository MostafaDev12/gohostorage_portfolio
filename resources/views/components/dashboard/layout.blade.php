<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Css -->
    <x-dashboard.partials.css />

    <!--TinyMCE  script -->
    <x-dashboard.tinymce-config />

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <x-dashboard.partials.header />

        <!-- ========== Left Sidebar Start ========== -->
        <x-dashboard.partials.left-sidebar />
        <!-- Left Sidebar End -->


        <!-- Start right Content here -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot }}
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <x-dashboard.partials.right-sidebar />
        <!-- /Right-bar -->

    </div>

    <!-- JAVASCRIPT -->

    <x-dashboard.partials.script />

    @yield('script')

</body>

</html>
