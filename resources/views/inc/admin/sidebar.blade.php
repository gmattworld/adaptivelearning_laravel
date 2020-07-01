<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-compact" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start @if(strtolower($active) == 'dashboard') active open @endif">
                <a href="{{ URL('/admin/dashboard') }}" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'school') active open @endif">
                <a href="{{ URL('/admin/schools') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">School Mgt.</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'department') active open @endif">
                <a href="{{ URL('/admin/departments') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Department Mgt.</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'level') active open @endif">
                <a href="{{ URL('/admin/levels') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Level Mgt.</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'course') active open @endif">
                <a href="{{ URL('/admin/courses') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Course Mgt.</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'subject') active open @endif">
                <a href="{{ URL('/admin/subjects') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Subject Mgt.</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'resource') active open @endif">
                <a href="{{ URL('/admin/resources') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Resource Mgt.</span>
                </a>
            </li>

            <li class="nav-item start @if(strtolower($active) == 'post') active open @endif">
                <a href="{{ URL('/admin/posts') }}" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Article Mgt.</span>
                </a>
            </li>

            <li class="nav-item @if(strtolower($active) == 'users') active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">User Mgt.</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(strtolower($active) == 'users'  && strtolower($subactive) == 'usertype') active open @endif">
                        <a href="{{ URL('/admin/usertypes') }}" class="nav-link">
                            <span class="title">User Types</span>
                        </a>
                    </li>
                    <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'user') active open @endif">
                        <a href="{{ URL('/admin/users') }}" class="nav-link">
                            <span class="title">Users</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'staff') active open @endif">
                        <a href="{{ URL('/admin/staffs') }}" class="nav-link">
                            <span class="title">Staff</span>
                        </a>
                    </li>
                    <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'student') active open @endif">
                        <a href="{{ URL('/admin/students') }}" class="nav-link">
                            <span class="title">Student</span>
                        </a>
                    </li> --}}
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
