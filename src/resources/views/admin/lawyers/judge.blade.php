@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Judges Management
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
                <span>Judges</span>
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
                            <i class="icon-lawyer"></i> Something else here</a>
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
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-lawyer font-dark"></i>
                    <span class="caption-subject bold uppercase"> Judges Management</span>
                </div>
                <div class="actions">
                    <div class="btn-group btn-group-devided" data-toggle="buttons">
                        <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                            <input type="radio" name="options" class="toggle" id="option1">Actions
                        </label>
                    </div>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">@include('inc.message')</div>
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{{ URL('/admin/lawyers') }}" id="sample_editable_1_new" class="btn sbold green"> Add Judge
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="btn-group pull-right">
                                <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> Last Name </th>
                            <th> Other Names </th>
                            <th> User Type </th>
                            <th> Status </th>
                            <th> Date Created </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($model) > 0)
                            @foreach($model as $item)
                                <tr class="odd gradeX">
                                    <td>
                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td>
                                    <td>{!! $item->user->lastname !!}</td>
                                    <td>{!! $item->user->othernames !!}</td>
                                    <td>{!! $item->user->user_type->name !!}</td>
                                    <td>
                                        <span class="label label-sm {{ $item->is_active ? 'label-success' : 'label-danger' }}"> {{ $item->is_active ? 'Active' : 'Disabled' }} </span>
                                    </td>
                                    <td class="center"> {!! $item->created_at !!} </td>
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="{{ URL('/admin/lawyers/'. $item->id) }}"><i class="icon-eye"></i> View Details </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL('/admin/lawyers/'. $item->id .'/status') }}"><i class="icon-key"></i> {{ $item->is_active ? 'Disable' : 'Enable' }} </a>
                                                </li>
                                                <li>
                                                    <a href="{{ URL('/admin/lawyers/'. $item->id .'/edit') }}"><i class="icon-pencil"></i> Edit </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td colspan="7" class="text-center"> <h3>No lawyer has been made judge yet</h3> </td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection

@section('pagestyle')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ URL::asset('admin/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pageplugin')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ URL::asset('admin/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pagescript')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::asset('admin/assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
