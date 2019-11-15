@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Admin Dashboard
        <small>statistics, charts, recent events and reports</small>
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>
        <div class="page-toolbar">
            <div class="btn-group pull-right">
                <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <a href="#">
                            <i class="icon-bell"></i> Action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-shield"></i> Another action</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-user"></i> Something else here</a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="#">
                            <i class="icon-bag"></i> Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER-->
@endsection
@section('content')
<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ URL('/admin/categories') }}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>Category</span>
                </div>
                <div class="desc"> Management </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="{{ URL('/admin/cases') }}">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>Cases</span> </div>
                <div class="desc"> Management </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{ URL('/admin/users') }}">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>Users</span>
                </div>
                <div class="desc"> Management </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 purple" href="{{ URL('/admin/posts') }}">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>Blog</span> </div>
                <div class="desc"> Management </div>
            </div>
        </a>
    </div>
</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->

<div class="row">
    <div class="col-md-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light calendar ">
            <div class="portlet-title ">
                <div class="caption">
                    <i class="icon-calendar font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Ongoing Cases</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> Name </th>
                            <th> Category </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if(count($ongoingcases) > 0)
                            @foreach($ongoingcases as $item)
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>{!! $item->name !!}</td>
                                    <td>{!! $item->category->name !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="{{ URL('/admin/cases/'. $item->id) }}"><i class="icon-eye"></i> View Details </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL('/admin/cases/'. $item->id .'/edit') }}"><i class="icon-key"></i> Update Status </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL('/admin/cases/'. $item->id .'/edit') }}"><i class="icon-pencil"></i> Edit </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="7" class="text-center"> <h3>No Ongoing Case</h3> </td></tr>
                        @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>

    <div class="col-md-6">
        <!-- BEGIN PORTLET-->
        <div class="portlet light calendar ">
            <div class="portlet-title ">
                <div class="caption">
                    <i class="icon-calendar font-dark hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Pending Cases</span>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> Name </th>
                            <th> Category </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if(count($pendingcases) > 0)
                            @foreach($pendingcases as $item)
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>{!! $item->name !!}</td>
                                    <td>{!! $item->category->name !!}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="{{ URL('/admin/cases/'. $item->id) }}"><i class="icon-eye"></i> View Details </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL('/admin/cases/'. $item->id .'/edit') }}"><i class="icon-key"></i> Update Status </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL('/admin/cases/'. $item->id .'/edit') }}"><i class="icon-pencil"></i> Edit </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="7" class="text-center"> <h3>No Case Pending</h3> </td></tr>
                        @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection

@section('pagestyle')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pageplugin')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ URL::asset('admin/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pagescript')
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
@endsection
