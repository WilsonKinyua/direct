<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Direct.co.ke - Admin Dashboard" />
    <meta name="author" content="Direct.co.ke" />
    <title>
        Admin | Direct.co.ke
    </title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('admin-assets/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin-assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin-assets/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('admin-assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- data tables -->
	<link href="{{ asset('admin-assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
    type="text/css" />
    <link href="{{ asset('admin-assets/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/material/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/material_style.css') }}">
    <!-- inbox style -->
    <link href="{{ asset('admin-assets/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- site Styles -->
    <link href="{{ asset('admin-assets/css/theme/dark/theme_style.css') }}" rel="stylesheet" id="rt_style_components"
        type="text/css" />
    <link href="{{ asset('admin-assets/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/theme/dark/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin-assets/css/theme/dark/theme-color.css') }}" rel="stylesheet" type="text/css" />
    <!-- dropzone -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <!-- Date Time item CSS -->
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/flatpicker/css/flatpickr.min.css') }}" />
    <!-- Jquery Toast css -->
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    @yield('css')
</head>

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
    <div class="page-wrapper">



        <!-- start header -->
        @include('partials.admin.header')
        <!-- end header -->


        <!-- start page container -->
        <div class="page-container">

            <!-- start sidebar menu -->
            @include('partials.admin.sidebar')
            <!-- end sidebar menu -->

            <!-- start page content -->
            @yield('content')
            <!-- end page content -->

        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner">
                <a href="https://direct.co.ke/" target="_blank" class="makerCss">www.direct.co.ke</a> &copy; 2022
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div> <!-- end footer -->

        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <!-- start js include path -->
    <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/popper/popper.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/jquery-blockui/jquery.blockui.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/material/material.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/sparkline/sparkline-data.js') }}"></script>


    <script src="{{ asset('admin-assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

    <!-- Common js-->
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <script src="{{ asset('admin-assets/js/layout.js') }}"></script>
    <script src="{{ asset('admin-assets/js/theme-color.js') }}"></script>

    <!-- data tables -->
    <script src="{{ asset('admin-assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/pages/table/table_data.js') }}"></script>

    <!-- dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>

    <!-- notifications -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    {{-- <!-- material -->
    <script src="{{ asset('admin-assetsplugins/material/material.min.js') }}"></script>
    <!--apex chart-->
    <script src="{{ asset('admin-assetsplugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-assetsjs/pages/chart/chartjs/home-data.js') }}"></script>
    <!-- summernote -->
    <script src="{{ asset('admin-assetsplugins/summernote/summernote.js') }}"></script>
    <script src="{{ asset('admin-assetsjs/pages/summernote/summernote-data.js') }}"></script>
    <!-- end js include path --> --}}
    <script>
        // Get the Toast button
        var toastButton = document.getElementById("toast-btn");
        // Get the Toast element
        var toastElement = document.getElementsByClassName("toast")[0];

        toastButton.onclick = function() {
            $('.toast').toast('show');
        }
    </script>
    <script>
        // toast message
        @if (session()->has('success'))
            toastr.success("{{ session()->get('success') }}");
        @endif

        @if (session()->has('danger'))
            toastr.warning("{{ session()->get('danger') }}");
        @endif

        @if (session()->has('error'))
            toastr.error("{{ session()->get('error') }}");
        @endif
    </script>
    @yield('js')
</body>

</html>
