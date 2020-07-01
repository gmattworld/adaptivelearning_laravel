<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	@include('inc.admin.head')
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			@include('inc.admin.header')
			<!-- end::Header -->
		    <!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
				<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
                        <!-- BEGIN: Subheader -->
                        <div class="m-subheader ">
                            @yield('subheader')
                        </div>
						<!-- END: Subheader -->
						<div class="m-content">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
			<!-- end::Body -->
            <!-- begin::Footer -->
			@include('inc.admin.footer')
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    	<!-- begin::Quick Sidebar -->
		@include('inc.admin.quicksidebar')
		<!-- end::Quick Sidebar -->
	    <!-- begin::Scroll Top -->
		@include('inc.admin.scrolltop')
        <!-- end::Scroll Top -->
        <!-- begin::Quick Nav -->
		@include('inc.admin.quicknav')
        <!-- end::Quick Nav -->
    	<!--begin::Base Scripts -->
		@include('inc.admin.basescript')
		<!--end::Base Scripts -->
        <!--begin::Page Snippets -->
        @yield('pagescript')
        <!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
