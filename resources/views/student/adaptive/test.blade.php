@extends('layouts.student')


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="tabbable-line boxless tabbable-reversed">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_2" data-toggle="tab">
                        <!-- BEGIN PAGE HEADER-->
                        <h1 class="page-title"> Suitable Learning System Detector
                            <small></small>
                        </h1>
                        <!-- END PAGE HEADER-->
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_2">
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-gift"></i>Kindly attempt all questions </div>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"> </a>
                                <a href="javascript:;" class="reload"> </a>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <!-- BEGIN FORM-->
                            {!! Form::open(['action' => 'DashboardController@save_adaptive', 'files'=>true, 'class'=>'form-horizontal', 'method'=>'POST', 'id'=>'form_validation']) !!}
                                <div class="form-body">
                                    {{-- <h3 class="form-section">Person Info</h3> --}}
                                    @include('inc.message')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-6">
                                            <div class="">
                                                <p style="text-align: justify; font-size: 1.2em;" class="alert alert-success">
                                                    E-Learning or technology in learning has become a buzz in the education industry and
                                                    today it caters for the needs of modern-day learners. Infusing technologies in classroom
                                                    learning have added to stimulus and enhanced learner's interaction within the classroom
                                                    and also outside the classroom. E-learning refers to using electronic applications and
                                                    processes to learn. E-learning applications and processes include Web-based learning,
                                                    computer-based learning, virtual education opportunities and digital collaboration.
                                                    Content is delivered via the Internet, intranet/extranet, audio or video tape. In essence, elearning is a computer based educational tool or system that enables you to learn
                                                    anywhere and at any time. It can be self-pace or instructor-led and includes media in the
                                                    form of text, image, animation, streaming video and audio.
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('read_type', 'Display Content Type', ['class'=>'control-label col-md-3']) !!}
                                                <div class="col-md-9">
                                                    {!! Form::select('read_type', array('PDF' => 'Text', 'Audio' => 'Audio', 'Visual' => 'Visual'), auth()->user()->read_type, ['class'=>'form-control', 'required'=>'required', 'placeholder'=>' Select your favourable reading type']) !!}
                                                    <span class="text-danger"> {!! $errors->first('read_type'); !!} </span>
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
