<?php $__env->startSection('content'); ?>
<!-- Home -->

<div class="home">
    <!-- Background image artist https://unsplash.com/thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo e(URL::asset('client/images/news.jpg')); ?>" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">News</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- News -->

<div class="news">
    <div class="container">
        <div class="row">

            <!-- News Posts -->
            <div class="col-lg-8">
                <div class="news_posts">

                    <!-- News Post -->
                    <div class="news_post">
                        <div class="news_post_image"><img src="<?php echo e(URL::asset('client/images/news_5.jpg')); ?>" alt=""></div>
                        <div class="news_post_body">
                            <div class="news_post_date"><a href="#">April 02, 2018</a></div>
                            <div class="news_post_title"><a href="#">Books, Kindle or Tablet?</a></div>
                            <div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                <div class="news_post_comments"><a href="#">3 Comments</a></div>
                                <div class="news_post_tags">
                                    <span>in </span>
                                    <ul>
                                        <li><a href="#">Social Media</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue.</p>
                            </div>
                            <div class="news_post_link"><a href="#">Read More</a></div>
                        </div>
                    </div>

                    <!-- News Post -->
                    <div class="news_post">
                        <div class="news_post_image"><img src="<?php echo e(URL::asset('client/images/news_6.jpg')); ?>" alt=""></div>
                        <div class="news_post_body">
                            <div class="news_post_date"><a href="#">April 02, 2018</a></div>
                            <div class="news_post_title"><a href="#">Why choose an online course?</a></div>
                            <div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                <div class="news_post_comments"><a href="#">3 Comments</a></div>
                                <div class="news_post_tags">
                                    <span>in </span>
                                    <ul>
                                        <li><a href="#">Social Media</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue.</p>
                            </div>
                            <div class="news_post_link"><a href="#">Read More</a></div>
                        </div>
                    </div>

                    <!-- News Post -->
                    <div class="news_post">
                        <div class="news_post_image"><img src="<?php echo e(URL::asset('client/images/news_7.jpg')); ?>" alt=""></div>
                        <div class="news_post_body">
                            <div class="news_post_date"><a href="#">April 02, 2018</a></div>
                            <div class="news_post_title"><a href="#">10 ways to get more productive</a></div>
                            <div class="news_post_meta d-flex flex-row align-items-start justify-content-start">
                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                <div class="news_post_comments"><a href="#">3 Comments</a></div>
                                <div class="news_post_tags">
                                    <span>in </span>
                                    <ul>
                                        <li><a href="#">Social Media</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news_post_text">
                                <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue.</p>
                            </div>
                            <div class="news_post_link"><a href="#">Read More</a></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar_search">
                        <form action="#" id="sidebar_search_form" class="sidebar_search_form">
                            <input type="text" class="sidebar_search_input" placeholder="Search" required="required">
                            <button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <div class="sidebar_categories">
                        <div class="sidebar_title">Categories</div>
                        <div class="sidebar_links">
                            <ul>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Social Media</a></li>
                                <li><a href="#">Lifestyle & Events</a></li>
                                <li><a href="#">Online Learning</a></li>
                                <li><a href="#">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_latest_posts">
                        <div class="sidebar_title">Latest Posts</div>
                        <div class="latest_posts">

                            <!-- News Post -->
                            <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                <div><div class="latest_post_image"><img src="<?php echo e(URL::asset('client/images/news_1.jpg')); ?>" alt="https://unsplash.com/beccatapert"></div></div>
                                <div class="latest_post_body">
                                    <div class="latest_post_date">April 02, 2018</div>
                                    <div class="latest_post_title"><a href="news.html">Why Choose online education?</a></div>
                                    <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                </div>
                            </div>

                            <!-- News Post -->
                            <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                <div><div class="latest_post_image"><img src="<?php echo e(URL::asset('client/images/news_2.jpg')); ?>" alt="https://unsplash.com/nbb_photos"></div></div>
                                <div class="latest_post_body">
                                    <div class="latest_post_date">April 02, 2018</div>
                                    <div class="latest_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                    <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                </div>
                            </div>

                            <!-- News Post -->
                            <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                <div><div class="latest_post_image"><img src="<?php echo e(URL::asset('client/images/news_3.jpg')); ?>" alt="https://unsplash.com/rawpixel"></div></div>
                                <div class="latest_post_body">
                                    <div class="latest_post_date">April 02, 2018</div>
                                    <div class="latest_post_title"><a href="news.html">Why Choose online education?</a></div>
                                    <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                </div>
                            </div>

                            <!-- News Post -->
                            <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                <div><div class="latest_post_image"><img src="<?php echo e(URL::asset('client/images/news_4.jpg')); ?>" alt="https://unsplash.com/jtylernix"></div></div>
                                <div class="latest_post_body">
                                    <div class="latest_post_date">April 02, 2018</div>
                                    <div class="latest_post_title"><a href="news.html">Books, Kindle or tablet?</a></div>
                                    <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sidebar_elearn">
                        <div class="elearn">
                            <div class="elearn_background" style="background-image:url(client/images/elearn.jpg)"></div>
                            <div class="elearn_content d-flex flex-column align-items-center justify-content-end">
                                <div class="elearn_line">Get a 20% Discount</div>
                                <div class="elearn_link"><a href="#">Register now</a></div>
                                <div class="dcount">
                                    <div class="dcount_content d-flex flex-column align-items-center justify-content-center">
                                        <div class="dcount_value">20%</div>
                                        <div class="dcount_text">off</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col">
                <div class="news_pagination">
                    <ul>
                        <li><a href="#">01</a></li>
                        <li class="active"><a href="#">02</a></li>
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
    <link href="<?php echo e(URL::asset('client/plugins/font-awesome-4.7.0/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(URL::asset('client/plugins/video-js/video-js.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/news.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('client/styles/news_responsive.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(URL::asset('client/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/styles/bootstrap4/popper.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/styles/bootstrap4/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/easing/easing.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/plugins/parallax-js-master/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('client/js/news.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/public/news.blade.php ENDPATH**/ ?>