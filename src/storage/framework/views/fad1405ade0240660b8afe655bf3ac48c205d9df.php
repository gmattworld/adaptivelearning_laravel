<?php $__env->startSection('content'); ?>
    <!-- Home -->
    <div class="home">
        <!-- Background image artist https://unsplash.com/thepootphotographer -->
        <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="../client/images/about.jpg" data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">
                            <div class="home_title">About us</div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                                    <li>About us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About -->
    <div class="about">
        <div class="container">
            <div class="row about_row row-lg-eq-height">
                <div class="col-lg-6">
                    <div class="about_content">
                        <div class="about_title">Our Platform's main goal</div>
                        <div class="about_text">
                            <p>
                                The basic idea of adaptivity in learning is the ability to modify the presentation of
                                material in response to student’s performance. The system will serve as a centralized
                                database of syllabus for the courses offered at the university allowing students and
                                faculties (current, past and prospective), to view them. The system will end up bringing
                                an effective communication among students, lectures, and the administration, by
                                accessing information and other resources anytime, anywhere.<br />
                                E-Learning represents an innovative shift in the field of learning, providing rapid access
                                to specific knowledge and information. It offers online instruction that can be delivered
                                anytime and anywhere through a wide range of electronic learning solutions such as
                                Web-based courseware. E-learning would enable institutions transcend distance by
                                providing a cohesive virtual learning environment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_image"><img src="<?php echo e(URL::asset('client/images/about_1.jpg')); ?>" alt="https://unsplash.com/jtylernix"></div>
                </div>
            </div>
            <div class="row about_row row-lg-eq-height">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about_image"><img src="<?php echo e(URL::asset('client/images/about_1.jpg')); ?>" alt=""></div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about_content">
                        <div class="about_title">aLearn's Vision</div>
                        <div class="about_text">
                            <p>
                                To reduce learning cost: E-Learning does not involve the use of papers, no delays,
                                and no travel expenses, thereby reducing the cost of acquiring knowledge. Such
                                learning enables learners or students to take what they have just learned from their
                                computer screens and apply it to the tasks or project at hand.
                            </p>
                            <p>
                                To improve flexibility of course delivery, that is, tailoring the learning process to the individual student’s style.
                            </p>
                        </div>
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

    <!-- Teachers -->
    <div class="teachers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="teachers_title text-center">Meet the Team</div>
                </div>
            </div>
            <div class="row teachers_row">

                <!-- Teacher -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher">
                        <div class="teacher_image"><img src="<?php echo e(URL::asset('client/images/teacher_1.jpg')); ?>" alt="https://unsplash.com/nickkarvounis"></div>
                        <div class="teacher_body text-center">
                            <div class="teacher_title"><a href="#">Mac Eva Linkon</a></div>
                            <div class="teacher_subtitle">Marketing</div>
                            <div class="teacher_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher">
                        <div class="teacher_image"><img src="<?php echo e(URL::asset('client/images/teacher_2.jpg')); ?>" alt="https://unsplash.com/rawpixel"></div>
                        <div class="teacher_body text-center">
                            <div class="teacher_title"><a href="#">Michelle Williams</a></div>
                            <div class="teacher_subtitle">Art & Design</div>
                            <div class="teacher_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Teacher -->
                <div class="col-lg-4 col-md-6">
                    <div class="teacher">
                        <div class="teacher_image"><img src="<?php echo e(URL::asset('client/images/teacher_3.jpg')); ?>" alt="https://unsplash.com/taylor_grote"></div>
                        <div class="teacher_body text-center">
                            <div class="teacher_title"><a href="#">Odumosu Damilola</a></div>
                            <div class="teacher_subtitle">Marketing</div>
                            <div class="teacher_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/bootstrap4/bootstrap.min.css')); ?>">
    <link href="<?php echo e(URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('client/plugins/video-js/video-js.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/about.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/about_responsive.css')); ?>">
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
    <script src="<?php echo e(URL::asset('client/plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/parallax-js-master/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/js/about.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/public/about.blade.php ENDPATH**/ ?>