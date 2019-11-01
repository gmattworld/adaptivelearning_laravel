@extends('layouts.client')

@section('content')


<!-- Home -->

<div class="home">
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item">
                <!-- Background image artist https://unsplash.com/benwhitephotography -->
                <div class="home_slider_background" style="background-image:url('client/images/index.jpg')"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content text-center">
                                    <div class="home_logo"><img src="{{ URL::asset('client/images/home_logo.png') }}" alt=""></div>
                                    <div class="home_text">
                                        <div class="home_title">CS Adaptive E-Learning</div>
                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                    </div>
                                    <div class="home_buttons">
                                        <div class="button home_button"><a href="#">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                        <div class="button home_button"><a href="#">see all courses<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item">
                <!-- Background image artist https://unsplash.com/benwhitephotography -->
                <div class="home_slider_background" style="background-image:url(client/images/index.jpg)"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content text-center">
                                    <div class="home_logo"><img src="{{ URL::asset('client/images/home_logo.png') }}" alt=""></div>
                                    <div class="home_text">
                                        <div class="home_title">CS Adaptive E-Learning</div>
                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                    </div>
                                    <div class="home_buttons">
                                        <div class="button home_button"><a href="#">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                        <div class="button home_button"><a href="#">see all courses<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item">
                <!-- Background image artist https://unsplash.com/benwhitephotography -->
                <div class="home_slider_background" style="background-image:url(client/images/index.jpg)"></div>
                <div class="home_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content text-center">
                                    <div class="home_logo"><img src="{{ URL::asset('client/images/home_logo.png') }}" alt=""></div>
                                    <div class="home_text">
                                        <div class="home_title">CS Adaptive E-Learning</div>
                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                    </div>
                                    <div class="home_buttons">
                                        <div class="button home_button"><a href="#">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                        <div class="button home_button"><a href="#">see all courses<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Courses -->

<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Choose your course</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="course_search">
                    <form action="#" class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                        <div><input type="text" class="course_input" placeholder="Course" required="required"></div>
                        <div><input type="text" class="course_input" placeholder="Level" required="required"></div>
                        <button class="course_button"><span>search course</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <!-- Courses Slider -->
                <div class="courses_slider_container">
                    <div class="owl-carousel owl-theme courses_slider">

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{ URL::asset('client/images/course_1.jpg') }}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Featured</a></div>
                                        <div class="course_price ml-auto">Price: <span>$35</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
                                    <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="course_author_image"><img src="{{ URL::asset('client/images/featured_author.jpg') }}" alt="https://unsplash.com/anthonytran"></div>
                                        <div class="course_author_name">By <a href="#">James S. Morrison</a></div>
                                        <div class="course_sales ml-auto"><span>352</span> Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{ URL::asset('client/images/course_2.jpg') }}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">New</a></div>
                                        <div class="course_price ml-auto">Price: <span>$35</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
                                    <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="course_author_image"><img src="{{ URL::asset('client/images/course_author_2.jpg') }}" alt=""></div>
                                        <div class="course_author_name">By <a href="#">Mark Smith</a></div>
                                        <div class="course_sales ml-auto"><span>352</span> Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{ URL::asset('client/images/course_3.jpg') }}" alt="https://unsplash.com/annademy"></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Featured</a></div>
                                        <div class="course_price ml-auto">Price: <span>$35</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Marketing Course</a></h3></div>
                                    <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="course_author_image"><img src="{{ URL::asset('client/images/course_author_3.jpg') }}" alt=""></div>
                                        <div class="course_author_name">By <a href="#">Julia Williams</a></div>
                                        <div class="course_sales ml-auto"><span>352</span> Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Courses Slider Nav -->
                    <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                    <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Milestones -->

<div class="milestones">
    <!-- Background image artis https://unsplash.com/thepootphotographer -->
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ URL::asset('client/images/milestones.jpg') }}" data-speed="0.8"></div>
    <div class="container">
        <div class="row milestones_container">

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('client/images/milestone_1.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="1548">0</div>
                    <div class="milestone_text">Online Courses</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('client/images/milestone_2.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="7286">0</div>
                    <div class="milestone_text">Students</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('client/images/milestone_3.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="257">0</div>
                    <div class="milestone_text">Teachers</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{ URL::asset('client/images/milestone_4.svg') }}" alt=""></div>
                    <div class="milestone_counter" data-end-value="39">0</div>
                    <div class="milestone_text">Countries</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Sections -->
<!-- Join -->

<div class="join">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Join Our Platform Today</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
            </div>
        </div>
    </div>
    <div class="button join_button"><a href="#">register now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
</div>
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/plugins/video-js/video-js.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('client/styles/responsive.css') }}">
@endsection

@section('scripts')
    <script src="{{ URL::asset('client/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('client/styles/bootstrap4/popper.js') }}"></script>
    <script src="{{ URL::asset('client/styles/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/greensock/TweenMax.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/greensock/TimelineMax.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/greensock/animation.gsap.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/easing/easing.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/video-js/video.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/video-js/Youtube.min.js') }}"></script>
    <script src="{{ URL::asset('client/plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ URL::asset('client/js/custom.js') }}"></script>
@endsection
