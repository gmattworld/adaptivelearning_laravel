@extends('layouts.cadmin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Efilings Management
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
                <i class="icon-archive"></i>
                <a href="{{ URL('/admin/efilings') }}">Efilings</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Efiling</span>
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
                            <i class="icon-archive"></i> Something else here</a>
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
                    <a href="#tab_2" data-toggle="tab"> Edit Efiling </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Efiling Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::open(['action' => ['EfilingController@update', $model->id], 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']) !!}
                                <div class="form-body">
                                    {{-- <h3 class="form-section">Person Info</h3> --}}
                                    @include('inc.message')
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Name', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('name', $model->name, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Name']) !!}
                                                    <span class="text-danger"> {!! $errors->first('name'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('category_id', 'Category', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::select('category_id', $categories, $model->category_id, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select Category']) !!}
                                                    <span class="text-danger"> {!! $errors->first('category_id'); !!} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('filepath', 'File Path', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::file('filepath', ['class'=>'form-control']) !!}
                                                    <span class="text-danger"> {!! $errors->first('filepath'); !!} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!! Form::label('description', 'Description', ['class'=>'col-md-12']) !!}
                                                <div class="col-md-12">
                                                    {!! Form::textarea('description', $model->description, ['class'=>'form-control', 'required'=>'required', 'id'=>'article-ckeditor', 'placeholder'=>' Description']) !!}
                                                    <span class="text-danger"> {!! $errors->first('description'); !!} </span>
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
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pagescript')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
