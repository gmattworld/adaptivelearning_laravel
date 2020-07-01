@extends('layouts.admin')

@section('pageheader')
    <!-- BEGIN PAGE HEADER-->
    <h1 class="page-title"> New User Profile | Account
        <small></small>
    </h1>
    <!-- END PAGE HEADER-->
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{ URL::asset('storage/DPs/'.auth()->user()->dp_image ) }}" class="img-responsive" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {{ auth()->user()->name }} </div>
                    <div class="profile-usertitle-job"> {{ auth()->user()->user_type->name }} </div>
                    <br />
                    <br />
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
        <!-- BEGIN PROFILE CONTENT -->
        <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Change Password</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <!-- CHANGE PASSWORD TAB -->
                                <div class="tab-pane active" id="tab_1_3">
                                    <!-- BEGIN FORM-->
                                    {!! Form::open(['action' => 'UsersController@ChangePassword', 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']) !!}
                                        <div class="form-body">
                                            @include('inc.message')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-offset-1 col-md-10">
                                                    <div class="form-group">
                                                        {!! Form::label('password', 'Password', ['class'=>'control-label col-md-3']) !!}
                                                        <div class="col-md-9">
                                                            {!! Form::password('password', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Password']) !!}
                                                            <span class="text-danger"> {!! $errors->first('password'); !!} </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('newpassword', 'New Password', ['class'=>'control-label col-md-3']) !!}
                                                        <div class="col-md-9">
                                                            {!! Form::password('newpassword', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' New Password']) !!}
                                                            <span class="text-danger"> {!! $errors->first('newpassword'); !!} </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('cnewpassword', 'Confirm Password', ['class'=>'control-label col-md-3']) !!}
                                                        <div class="col-md-9">
                                                            {!! Form::password('cnewpassword', ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Confirm Password']) !!}
                                                            <span class="text-danger"> {!! $errors->first('cnewpassword'); !!} </span>
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
                                                            {!! Form::submit('Update', ['class'=>'btn green']) !!}
                                                            {!! Form::reset('Cancel', ['class'=>'btn default']) !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                    <!-- END FORM-->
                                </div>
                                <!-- END CHANGE PASSWORD TAB -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PROFILE CONTENT -->
    </div>
</div>
@endsection

@section('pagestyle')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ URL::asset('admin/assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pageplugin')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('pagescript')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{-- <script src="{{ URL::asset('admin/assets/pages/scripts/table-datatables-managed.min.js') }}" type="text/javascript"></script> --}}
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
