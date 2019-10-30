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
                <a href="{{ URL('/admin/lawyers') }}"> Lawyers</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Lawyer Details</span>
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
                    <a href="#tab_3" data-toggle="tab"> Lawyer Details </a>
                </li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="tab_3">
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>{{ $model->user->name }} Lawyer Info.</div>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('lastname', 'Last Name', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->lastname }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('othernames', 'Other Names', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->othernames }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('gender', 'Gender', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->gender }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('phone', 'Phone', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->email }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('email', 'Email', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->email }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('user_type', 'User Type', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->user_type->name }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('skills', 'Skills', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->skills }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('brief', 'Brief', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->brief }} </p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                {!! Form::label('username', 'Username', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->username }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('dob', 'Date of Birth', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->dob }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('facebook', 'Facebook ID', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->facebook }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('twitter', 'Twitter ID', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->twitter }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('linkedin', 'LinkedIn ID', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->linkedin }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('website', 'Website', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->website }} </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('address', 'Address', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    <p class="form-control-static"> {{ $model->user->address }} </p>
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
                                                    <a href="{{ URL('/admin/lawyers/'. $model->id .'/status') }}" class="btn {{ $model->is_active ? 'red' : 'green' }}">{{ $model->is_active ? 'Disable' : 'Enable' }}</a>
                                                    <a href="{{ URL('/admin/lawyers/'. $model->id .'/judgestatus') }}" class="btn {{ $model->is_judge ? 'red' : 'green' }}">{{ $model->is_judge ? 'Disqualify Judge' : 'Make Judge' }}</a>
                                                    {{-- <a href="{{ URL('/admin/lawyers/'. $model->id .'/canadvocate') }}" class="btn {{ $model->is_active ? 'red' : 'green' }}">{{ $model->is_active ? 'Disable' : 'Enable' }}</a> --}}
                                                    <a href="{{ URL('/admin/lawyers/'. $model->id .'/edit') }}" class="btn blue">Edit</a>
                                                    <a href="{{ URL('/admin/lawyers/') }}" class="btn default">Return to Lawyers</a>
                                                    <a href="{{ URL('/admin/judges/') }}" class="btn default">Return to Judges</a>
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
