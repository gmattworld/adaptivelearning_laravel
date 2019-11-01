<?php $__env->startSection('content'); ?>

<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('client/images/courses.jpg')); ?>" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">About us</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>About us</li>
                            </ul>
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

        <!-- Course Search -->
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

        <div class="row courses_row">

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_1.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">Featured</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/featured_author.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">James S. Morrison</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_2.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">New</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/course_author_2.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">Mark Smith</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_3.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">Featured</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Online Marketing Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/course_author_3.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">Julia Williams</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_4.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">Featured</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/featured_author.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">James S. Morrison</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_5.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">New</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/course_author_2.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">Mark Smith</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_6.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">Featured</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Online Marketing Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/course_author_3.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">Julia Williams</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_7.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">Featured</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/featured_author.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">James S. Morrison</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_8.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">New</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/course_author_2.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">Mark Smith</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 col-md-6">
                <div class="course">
                    <div class="course_image"><img src="<?php echo e(URL::asset('client/images/course_9.jpg')); ?>" alt=""></div>
                    <div class="course_body">
                        <div class="course_header d-flex flex-row align-items-center justify-content-start">
                            <div class="course_tag"><a href="#">Featured</a></div>
                            <div class="course_price ml-auto">Price: <span>$35</span></div>
                        </div>
                        <div class="course_title"><h3><a href="courses.html">Online Marketing Course</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="course_footer d-flex align-items-center justify-content-start">
                            <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/course_author_3.jpg')); ?>" alt="https://unsplash.com/anthonytran"></div>
                            <div class="course_author_name">By <a href="#">Julia Williams</a></div>
                            <div class="course_sales ml-auto"><span>352</span> Sales</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col">
                <div class="courses_paginations">
                    <ul>
                        <li class="active"><a href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/bootstrap4/bootstrap.min.css')); ?>">
    <link href="<?php echo e(URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')); ?>">
    <link href="<?php echo e(URL::asset('client/plugins/video-js/video-js.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/courses.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/courses_responsive.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(URL::asset('client/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/parallax-js-master/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/js/courses.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/public/courses.blade.php ENDPATH**/ ?>