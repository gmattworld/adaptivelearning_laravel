@extends('layouts.cadmin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Client Dashboard
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
        <a class="dashboard-stat dashboard-stat-v2 blue" href="{{ URL('/admin/profile') }}">
            <div class="visual">
                <i class="fa fa-comments"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>User</span>
                </div>
                <div class="desc"> Profile </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 red" href="{{ URL('/admin/efiling') }}">
            <div class="visual">
                <i class="fa fa-bar-chart-o"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>E Filing</span> </div>
                <div class="desc"> Management </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <a class="dashboard-stat dashboard-stat-v2 green" href="{{ URL('/admin/dockets') }}">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>Docket</span>
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
