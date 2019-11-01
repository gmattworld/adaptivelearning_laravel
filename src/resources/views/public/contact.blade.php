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
                                    <li><a href="index.html">Home</a></li>
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
                                        <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact_info_container">
                                    <div class="contact_info_main_title">Contact Us</div>
                                    <div class="contact_info">
                                        <div class="contact_info_item">
                                            <div class="contact_info_title">Address:</div>
                                            <div class="contact_info_line">1481 Creekside Lane Avila Beach, CA 93424</div>
                                        </div>
                                        <div class="contact_info_item">
                                            <div class="contact_info_title">Phone:</div>
                                            <div class="contact_info_line">+53 345 7953 32453</div>
                                        </div>
                                        <div class="contact_info_item">
                                            <div class="contact_info_title">Email:</div>
                                            <div class="contact_info_line">yourmailgmail.com</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_form_container">
                            <form action="#" id="contact_form" class="contact_form">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6 contact_name_col">
                                            <input type="text" class="contact_input" placeholder="Name" required="required">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                        </div>
                                    </div>
                                </div>
                                <div><input type="text" class="contact_input" placeholder="Subject" required="required"></div>
                                <div><textarea class="contact_input contact_textarea" placeholder="Message"></textarea></div>
                                <button class="contact_button"><span>send message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                            </form>
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
