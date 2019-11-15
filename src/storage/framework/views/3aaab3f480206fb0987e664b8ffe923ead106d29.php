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
                        <div class="home_title">Courses</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                                <li>Courses</li>
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
                <div class="section_subtitle">
                    We give you access to various computer science courses ranging from Introduction to Computer Science to Advance Computer Science courses like Implementation of Artificial Intelligent Driven Solutions.
                </div>
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

            <?php if(count($courses) > 0): ?>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Course -->
                    <div class="col-lg-4 col-md-6">
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

        <!-- Pagination -->
        <div class="row">
            <div class="col">
                <div class="courses_paginations">
                    <?php echo e($courses->links()); ?>

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