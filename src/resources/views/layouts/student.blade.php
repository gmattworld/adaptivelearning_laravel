<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    @include('inc.admin.head')
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-fixed page-md">
        <!-- BEGIN HEADER -->
        @include('inc.admin.header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('inc.student.sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    {{-- @include('inc.admin.themepanel') --}}
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE HEADER-->
                    @yield('pageheader')
                    <!-- END PAGE HEADER-->
                    <!-- BEGIN PAGE CONTENT-->
                    @yield('content')
                    <!-- END PAGE CONTENT-->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        @include('inc.admin.footer')
        <!-- END FOOTER -->
        <!-- BEGIN QUICK NAV -->
        {{-- @include('inc.admin.quicknav') --}}
        <!-- END QUICK NAV -->


        @include('inc.admin.basescript')
    </body>

</html>
