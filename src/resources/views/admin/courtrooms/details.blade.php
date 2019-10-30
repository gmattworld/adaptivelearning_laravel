@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Court Rooms Management
        <small></small>
    </h1>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{ URL('/admin/dashboard') }}">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <i class="icon-courtroom"></i>
                <a href="{{ URL('/admin/courtrooms') }}"> Court Rooms</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Court Room Details</span>
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
                            <i class="icon-courtroom"></i> Something else here</a>
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
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_3" data-toggle="tab"> Court Room Details </a>
                </li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="tab_3">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>{{ $model->name }} Court Room Info.</div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" role="form">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Name:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->name }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Court Branch:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->court->name }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Usage Status:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->status }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">No. of Seat:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->seat_count }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Location:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->location }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Date Created:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->created_at }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Accessibility Status:</label>
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->is_active ? 'Active' : 'Disabled' }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-8">
                                            <div class="row">
                                                <div class="text-right">
                                                    <a href="{{ URL('/admin/courtrooms/'. $model->id .'/status') }}" class="btn {{ $model->is_active ? 'red' : 'green' }}">{{ $model->is_active ? 'Disable' : 'Enable' }}</a>
                                                    <a href="{{ URL('/admin/courtrooms/'. $model->id .'/edit') }}" class="btn blue">Edit</a>
                                                    <a href="{{ URL('/admin/courtrooms/') }}" class="btn default">Return to list</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('pagestyle')
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pageplugin')
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pagescript')
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- END PAGE LEVEL SCRIPTS -->
@endsection
