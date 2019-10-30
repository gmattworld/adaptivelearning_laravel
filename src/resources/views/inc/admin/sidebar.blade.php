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

            <li class="nav-item start @if(strtolower($active) == 'archives') active open @endif">
                <a href="{{ URL('/admin/archives') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Archive Mgt.</span>
                </a>
            </li>


            <li class="nav-item start @if(strtolower($active) == 'category') active open @endif">
                <a href="{{ URL('/admin/categories') }}" class="nav-link">
                    <i class="icon-folder"></i>
                    <span class="title">Category Mgt.</span>
                </a>
            </li>

            {{-- <li class="nav-item start @if(strtolower($active) == 'department') active open @endif">
                <a href="{{ URL('/admin/departments') }}" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Department Mgt.</span>
                </a>
            </li>
            <li class="nav-item start @if(strtolower($active) == 'qualification') active open @endif">
                <a href="{{ URL('/admin/qualifications') }}" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Qualification Mgt.</span>
                </a>
            </li> --}}
            <li class="nav-item start @if(strtolower($active) == 'post') active open @endif">
                <a href="{{ URL('/admin/posts') }}" class="nav-link">
                    <i class="icon-briefcase"></i>
                    <span class="title">Blog Mgt.</span>
                </a>
            </li>

            <li class="nav-item @if(strtolower($active) == 'courts') active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Court Branch Mgt.</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(strtolower($active) == 'courts'  && strtolower($subactive) == 'court') active open @endif">
                        <a href="{{ URL('/admin/courts') }}" class="nav-link">
                            <span class="title">Court Branches</span>
                        </a>
                    </li>
                    <li class="nav-item @if(strtolower($active) == 'courts'  && strtolower($subactive) == 'courtroom') active open @endif">
                        <a href="{{ URL('/admin/courtrooms') }}" class="nav-link">
                            <span class="title">Court Rooms</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item @if(strtolower($active) == 'cases') active open @endif">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-briefcase"></i>
                    <span class="title">Cases Mgt.</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  @if(strtolower($active) == 'cases'  && strtolower($subactive) == 'case') active open @endif">
                        <a href="{{ URL('/admin/cases') }}" class="nav-link">
                            <span class="title">Cases</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item @if(strtolower($active) == 'cases'  && strtolower($subactive) == 'courtcase') active open @endif">
                        <a href="{{ URL('/admin/cases') }}" class="nav-link">
                            <span class="title">Court Cases</span>
                        </a>
                    </li> --}}
                </ul>
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
                    {{-- <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'userrole') active open @endif">
                        <a href="{{ URL('/admin/userroles') }}" class="nav-link">
                            <span class="title">User Roles</span>
                        </a>
                    </li> --}}
                    <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'lawyer') active open @endif">
                        <a href="{{ URL('/admin/lawyers') }}" class="nav-link">
                            <span class="title">Lawyers</span>
                        </a>
                    </li>
                    <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'judge') active open @endif">
                        <a href="{{ URL('/admin/judges') }}" class="nav-link">
                            <span class="title">Judges</span>
                        </a>
                    </li>
                    <li class="nav-item @if(strtolower($active) == 'users'  && strtolower($subactive) == 'client') active open @endif">
                        <a href="{{ URL('/admin/clients') }}" class="nav-link">
                            <span class="title">Clients</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
