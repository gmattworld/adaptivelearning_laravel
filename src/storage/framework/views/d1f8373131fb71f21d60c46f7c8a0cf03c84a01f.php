<?php $__env->startSection('content'); ?>
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
                                        <div class="home_logo"><img src="<?php echo e(URL::asset('client/images/home_logo.png')); ?>" alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title">CS Adaptive E-Learning</div>
                                            <div class="home_subtitle">
                                                E-Learning or technology in learning has become a buzz in the education industry and
                                                today it caters for the needs of modern-day learners. Infusing technologies in classroom
                                                learning have added to stimulus and enhanced learner's interaction within the classroom
                                                and also outside the classroom.
                                            </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="<?php echo e(URL('/about')); ?>">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                            <div class="button home_button"><a href="<?php echo e(URL('/courses')); ?>">see all courses<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
                                        <div class="home_logo"><img src="<?php echo e(URL::asset('client/images/home_logo.png')); ?>" alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title">CS Adaptive E-Learning</div>
                                            <div class="home_subtitle">
                                                E-Learning or technology in learning has become a buzz in the education industry and
                                                today it caters for the needs of modern-day learners. Infusing technologies in classroom
                                                learning have added to stimulus and enhanced learner's interaction within the classroom
                                                and also outside the classroom.
                                            </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="<?php echo e(URL('/about')); ?>">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                            <div class="button home_button"><a href="<?php echo e(URL('/courses')); ?>">see all courses<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
                                        <div class="home_logo"><img src="<?php echo e(URL::asset('client/images/home_logo.png')); ?>" alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title">CS Adaptive E-Learning</div>
                                            <div class="home_subtitle">
                                                E-Learning or technology in learning has become a buzz in the education industry and
                                                today it caters for the needs of modern-day learners. Infusing technologies in classroom
                                                learning have added to stimulus and enhanced learner's interaction within the classroom
                                                and also outside the classroom.
                                            </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="<?php echo e(URL('/about')); ?>">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                            <div class="button home_button"><a href="<?php echo e(URL('/courses')); ?>">see all courses<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
                    <div class="section_subtitle">
                        We give you access to various computer science courses ranging from Introduction to Computer Science to Advance Computer Science courses like Implementation of Artificial Intelligent Driven Solutions.
                    </div>
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
                            <?php if(count($courses) > 0): ?>
                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Slider Item -->
                                    <div class="owl-item">
                                        <div class="course">
                                            <div class="course_image"><img src="<?php echo e(URL::asset('/storage/cover_images/'. $course->cover_img)); ?>" alt=""></div>
                                            <div class="course_body">
                                                <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                                    
                                                    
                                                </div>
                                                <div class="course_title"><h3><a href="<?php echo e(URL('/courses/'.$course->id)); ?>"><?php echo e($course->name); ?></a></h3></div>
                                                <div class="course_text"><?php echo e($course->brief); ?></div>
                                                <div class="course_footer d-flex align-items-center justify-content-start">
                                                    <div class="course_author_image"><img src="<?php echo e(URL::asset('client/images/featured_author.jpg')); ?>"></div>
                                                    
                                                    <div class="course_sales ml-auto"><span><?php echo e($course->views); ?></span> Views</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="col-sm-12"><h4 class="text-center"><strong>We are still working on our courses, Kindly check back!</strong></h4></div>
                            <?php endif; ?>
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
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('client/images/milestones.jpg')); ?>" data-speed="0.8"></div>
        <div class="container">
            <div class="row milestones_container">

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo e(URL::asset('client/images/milestone_1.svg')); ?>" alt=""></div>
                        <div class="milestone_counter" data-end-value="1548">0</div>
                        <div class="milestone_text">Online Courses</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo e(URL::asset('client/images/milestone_2.svg')); ?>" alt=""></div>
                        <div class="milestone_counter" data-end-value="7286">0</div>
                        <div class="milestone_text">Students</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo e(URL::asset('client/images/milestone_3.svg')); ?>" alt=""></div>
                        <div class="milestone_counter" data-end-value="257">0</div>
                        <div class="milestone_text">Teachers</div>
                    </div>
                </div>

                <!-- Milestone -->
                <div class="col-lg-3 milestone_col">
                    <div class="milestone text-center">
                        <div class="milestone_icon"><img src="<?php echo e(URL::asset('client/images/milestone_4.svg')); ?>" alt=""></div>
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
                    <div class="section_subtitle">
                        There are many web-based learning and e-learning systems available on the Internet,
                        they provide only the same plain hypertext pages to all students regardless of individual
                        ability, but <strong>We adapt to your learning system!</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="button join_button"><a href="<?php echo e(URL('/register')); ?>">register now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/bootstrap4/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/plugins/OwlCarousel2-2.2.1/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/plugins/video-js/video-js.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/main_styles.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/responsive.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(URL::asset('client/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/greensock/TweenMax.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/greensock/TimelineMax.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/scrollmagic/ScrollMagic.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/greensock/animation.gsap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/greensock/ScrollToPlugin.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/OwlCarousel2-2.2.1/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/video-js/video.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/video-js/Youtube.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/parallax-js-master/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/js/custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/public/index.blade.php ENDPATH**/ ?>