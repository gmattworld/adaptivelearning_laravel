@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Court Branches Management
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
                <i class="icon-user"></i>
                <a href="{{ URL('/admin/courts') }}">Court Branches</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Create Court</span>
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
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_2" data-toggle="tab"> Create Court </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Court Branch Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::open(['action' => 'CourtController@store', 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']) !!}
                                <div class="form-body">
                                    {{-- <h3 class="form-section">Person Info</h3> --}}
                                    @include('inc.message')
                                    @csrf()
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Name', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('name', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Name']) !!}
                                                    <span class="text-danger"> {!! $errors->first('name'); !!} </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('contact_person', 'Contact Person', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('contact_person', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Contact Person']) !!}
                                                    <span class="text-danger"> {!! $errors->first('contact_person'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('contact_phone', 'Contact Phone', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::tel('contact_phone', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Contact Phone']) !!}
                                                    <span class="text-danger"> {!! $errors->first('contact_phone'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('contact_email', 'Contact Email', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::email('contact_email', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Contact Email']) !!}
                                                    <span class="text-danger"> {!! $errors->first('contact_email'); !!} </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('longitude', 'Longitude', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('longitude', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Longitude']) !!}
                                                    <span class="text-danger"> {!! $errors->first('longitude'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('latitude', 'Latitude', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('latitude', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Latitude']) !!}
                                                    <span class="text-danger"> {!! $errors->first('latitude'); !!} </span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {!! Form::label('description', 'Description', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::textarea('description', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Description']) !!}
                                                    <span class="text-danger"> {!! $errors->first('description'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('address', 'Address', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::textarea('address', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Address']) !!}
                                                    <span class="text-danger"> {!! $errors->first('address'); !!} </span>
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
                                                    {!! Form::submit('Save', ['class'=>'btn green']) !!}
                                                    {!! Form::reset('Cancel', ['class'=>'btn default']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {!! Form::close() !!}
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
