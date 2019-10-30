@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> Lawyers Management
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
                <i class="icon-lawyer"></i>
                <a href="{{ URL('/admin/lawyers') }}">Lawyers</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Lawyer</span>
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
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_2" data-toggle="tab"> Edit Lawyer </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Lawyer Information </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::open(['action' => ['LawyerController@update', $model->id], 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']) !!}
                                <div class="form-body">
                                    {{-- <h3 class="form-section">Person Info</h3> --}}
                                    @include('inc.message')
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('lastname', 'Last Name', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('lastname', $model->user->lastname, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Last Name']) !!}
                                                    <span class="text-danger"> {!! $errors->first('lastname'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('othernames', 'Other Names', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('othernames',  $model->user->othernames, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Other Names']) !!}
                                                    <span class="text-danger"> {!! $errors->first('othernames'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('gender', 'Gender', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female' ],  $model->gender, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select Gender']) !!}
                                                    <span class="text-danger"> {!! $errors->first('gender'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('phone', 'Phone', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('phone', $model->user->phone, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Phone']) !!}
                                                    <span class="text-danger"> {!! $errors->first('phone'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('email', 'Email', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::email('email', $model->user->email, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Email']) !!}
                                                    <span class="text-danger"> {!! $errors->first('email'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('user_type', 'User Type', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::select('user_type', $user_types, $model->user->user_type->id, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select User Type']) !!}
                                                    <span class="text-danger"> {!! $errors->first('user_type'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('skills', 'Skills', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                        {!! Form::text('skills', $model->skills, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Skills']) !!}
                                                    <span class="text-danger"> {!! $errors->first('skills'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('brief', 'Brief', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::textarea('brief', $model->brief, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Brief']) !!}
                                                    <span class="text-danger"> {!! $errors->first('brief'); !!} </span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('username', 'Username', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('username', $model->user->username, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' UserName']) !!}
                                                    <span class="text-danger"> {!! $errors->first('username'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('dob', 'Date of Birth', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::date('dob', $model->dob, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Date of Birth']) !!}
                                                    <span class="text-danger"> {!! $errors->first('dob'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('facebook', 'Facebook ID', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('facebook', $model->facebook, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Facebook ID']) !!}
                                                    <span class="text-danger"> {!! $errors->first('facebook'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('twitter', 'Twitter ID', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('twitter', $model->twitter, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Twitter ID']) !!}
                                                    <span class="text-danger"> {!! $errors->first('twitter'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('linkedin', 'LinkedIn ID', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('linkedin', $model->linkedin, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' LinkedIn ID']) !!}
                                                    <span class="text-danger"> {!! $errors->first('linkedin'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('website', 'Website', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::text('website', $model->website, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Website']) !!}
                                                    <span class="text-danger"> {!! $errors->first('website'); !!} </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('dp_image', 'Display Picture', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::file('dp_image', ['class'=>'form-control']) !!}
                                                    {{-- <span class="text-danger"> This is inline help </span> --}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('address', 'Address', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::textarea('address', $model->user->address, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Description']) !!}
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
