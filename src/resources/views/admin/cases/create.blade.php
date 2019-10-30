@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Cases Management
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
                <i class="icon-case"></i>
                <a href="{{ URL('/admin/cases') }}">Cases</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Create Case</span>
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
                            <i class="icon-case"></i> Something else here</a>
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
                    <a href="#tab_2" data-toggle="tab"> Create Case </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Case Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::open(['action' => 'CasesController@store', 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']) !!}
                                <div class="form-body">
                                    {{-- <h3 class="form-section">Person Info</h3> --}}
                                    @include('inc.message')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('name', 'Name', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('name', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Name']) !!}
                                                    <span class="text-danger"> {!! $errors->first('name'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('category_id', 'Category', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select Category']) !!}
                                                    <span class="text-danger"> {!! $errors->first('category_id'); !!} </span>
                                                </div>
                                            </div>
                                            {{-- <div class="form-group">
                                                {!! Form::label('keywords', 'Key Words', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('keywords', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Key Words']) !!}
                                                    <span class="text-danger"> {!! $errors->first('keywords'); !!} </span>
                                                </div>
                                            </div> --}}
                                            <div class="form-group">
                                                {!! Form::label('judge_id', 'Judges', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::select('judge_id', $judges, null, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select a Judge']) !!}
                                                    <span class="text-danger"> {!! $errors->first('judge_id'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('cover_img', 'Cover Image', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::file('cover_img', ['class'=>'form-control', 'required'=>'required']) !!}
                                                    <span class="text-danger"> {!! $errors->first('cover_img'); !!} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('brief', 'Brief', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::textarea('brief', '', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Brief']) !!}
                                                    <span class="text-danger"> {!! $errors->first('brief'); !!} </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                {!! Form::label('details', 'Details', ['class'=>'col-md-12']) !!}
                                                <div class="col-md-12">
                                                    {!! Form::textarea('details', '', ['class'=>'form-control', 'required'=>'required', 'id'=>'article-ckeditor', 'placeholder'=>' Details']) !!}
                                                    <span class="text-danger"> {!! $errors->first('details'); !!} </span>
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
