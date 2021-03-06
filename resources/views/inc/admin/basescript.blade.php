<!--begin::Base Scripts -->
<!--[if lt IE 9]>
<script src="{{ URL::asset('admin/assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/excanvas.min.js') }}"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/ie8.fix.min.js') }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ URL::asset('admin/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('pageplugin')
<!-- END PAGE LEVEL PLUGINS -->




<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('pagescript')
<!-- END PAGE LEVEL SCRIPTS -->



<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ URL::asset('admin/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ URL::asset('admin/assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/layouts/layout2/scripts/demo.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<!--end::Base Scripts -->
