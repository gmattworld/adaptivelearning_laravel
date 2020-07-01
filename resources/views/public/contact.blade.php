@extends('layouts.client')

@section('content')
    <!-- Home -->

    <div class="home">
        <!-- Background image artist https://unsplash.com/thepootphotographer -->
        <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="../client/images/contact.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">Contact</div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="{{ URL('/') }}">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container-fluid">
            <div class="row row-xl-eq-height">
                <!-- Contact Content -->
                <div class="col-xl-6">
                    <div class="contact_content">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact_about">
                                    <div class="logo_container">
                                        <a href="#">
                                            <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                                <div class="logo_img"><img src="{{ URL::asset('client/images/logo.png') }}" alt=""></div>
                                                <div class="logo_text">learn</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="contact_about_text">
                                        <p>
                                            The basic idea of adaptivity in learning is the ability to modify the presentation of
                                            material in response to student’s performance. The system will serve as a centralized
                                            database of syllabus for the courses offered at the university allowing students and
                                            faculties (current, past and prospective), to view them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact_info_container">
                                    <div class="contact_info_main_title">Contact Us</div>
                                    <div class="contact_info">
                                        <div class="contact_info_item">
                                            <div class="contact_info_title">Address:</div>
                                            <div class="contact_info_line">ALearn Avenue, Yaba College of Technology, Lagos, Nigeria.</div>
                                        </div>
                                        <div class="contact_info_item">
                                            <div class="contact_info_title">Phone:</div>
                                            <div class="contact_info_line">(+234) 812 345 6789</div>
                                        </div>
                                        <div class="contact_info_item">
                                            <div class="contact_info_title">Email:</div>
                                            <div class="contact_info_line">alearn@gmail.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_form_container">
                            {!! Form::open(['action' => 'HomeController@SaveContact', 'method'=>'POST', 'id'=>"contact_form", 'class'=>"contact_form"]) !!}
                                @include('inc.message')
                                @csrf()
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6 contact_name_col">
                                            {!! Form::text('name', '', ['class'=>'contact_input', 'required'=>'required', 'placeholder'=>' Name']) !!}
                                            <span class="text-danger"> {!! $errors->first('name'); !!} </span>
                                        </div>
                                        <div class="col-lg-6">
                                            {!! Form::email('email', '', ['class'=>'contact_input', 'required'=>'required', 'placeholder'=>' E-mail']) !!}
                                            <span class="text-danger"> {!! $errors->first('email'); !!} </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    {!! Form::text('subject', '', ['class'=>'contact_input', 'required'=>'required', 'placeholder'=>' Subject']) !!}
                                    <span class="text-danger"> {!! $errors->first('subject'); !!} </span>
                                </div>
                                <div>
                                    {!! Form::textarea('message', '', ['class'=>'contact_input contact_textarea', 'required'=>'required', 'placeholder'=>' Message']) !!}
                                    <span class="text-danger"> {!! $errors->first('message'); !!} </span>
                                </div>
                                {{ Form::button('<span>send message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>', ['type' => 'submit', 'class' => 'contact_button'] )  }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <!-- Contact Map -->
                <div class="col-xl-6 map_col">
                    <div class="contact_map">

                        <!-- Google Map -->
                        <div id="google_map" class="google_map">
                            <div class="map_container">
                                <div id="map"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('client/plugins/video-js/video-js.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/contact_responsive.css') }}">
@endsection

@section('scripts')
    <script src="{{ URL::asset('client/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('client/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ URL::asset('client/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/easing/easing.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{ URL::asset('client/js/contact.js') }}"></script>
@endsection
