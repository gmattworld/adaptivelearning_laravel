<!DOCTYPE html>
<html lang="en">
<head>
    <title>Elearn</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elearn project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <!-- Top Bar -->
            <div class="top_bar">
                <div class="top_bar_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                                    <ul class="top_bar_contact_list">
                                        <li><div class="question">Have any questions?</div></li>
                                        <li>
                                            <div>(+234) 812 345 6789</div>
                                        </li>
                                        <li>
                                            <div>alearn@gmail.com</div>
                                        </li>
                                    </ul>
                                    <div class="top_bar_login ml-auto">
                                        <ul>
                                            <li><a href="<?php echo e(URL('/register')); ?>">Register</a></li>
                                            <li><a href="<?php echo e(URL('/login')); ?>">Login</a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Content -->
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <a href="<?php echo e(URL('/')); ?>">
                                        <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                            <div class="logo_img"><img src="~/client/images/logo.png" alt=""></div>
                                            <div class="logo_text">alearn</div>
                                        </div>
                                    </a>
                                </div>
                                <nav class="main_nav_contaner ml-auto">
                                    <ul class="main_nav">
                                        <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                                        <li><a href="<?php echo e(URL('/about')); ?>">About us</a></li>
                                        <li><a href="<?php echo e(URL('/courses')); ?>">Courses</a></li>
                                        <li><a href="<?php echo e(URL('/news')); ?>">News</a></li>
                                        <li><a href="<?php echo e(URL('/contact')); ?>">Contact</a></li>
                                    </ul>
                                    <div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

                                    <!-- Hamburger -->

                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Search Panel -->
            <div class="header_search_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                                <form action="#" class="header_search_form">
                                    <input type="search" class="search_input" placeholder="Search" required="required">
                                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Menu -->
        <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
            <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
            <div class="search">
                <form action="#" class="header_search_form menu_mm">
                    <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
                    <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                        <i class="fa fa-search menu_mm" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
            <nav class="menu_nav">
                <ul class="menu_mm">
                    <li class="menu_mm"><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                    <li class="menu_mm"><a href="<?php echo e(URL('/about')); ?>">About us</a></li>
                    <li class="menu_mm"><a href="<?php echo e(URL('/courses')); ?>">Courses</a></li>
                    <li class="menu_mm"><a href="<?php echo e(URL('/news')); ?>">News</a></li>
                    <li class="menu_mm"><a href="<?php echo e(URL('/contact')); ?>">Contact</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_phone"><span class="menu_title">phone:</span>(+234) 812 345 6789</div>
                <div class="menu_social">
                    <span class="menu_title">follow us</span>
                    <ul>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>


        <main role="main">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- About -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_about">
                            <div class="logo_container">
                                <a href="<?php echo e(URL('/courses')); ?>">
                                    <div class="logo_content d-flex flex-row align-items-end justify-content-start">
                                        <div class="logo_img"><img src="images/logo.png" alt=""></div>
                                        <div class="logo_text">learn</div>
                                    </div>
                                </a>
                            </div>
                            <div class="footer_about_text">
                                <p>
                                    E-Learning or technology in learning has become a buzz in the education industry and
                                    today it caters for the needs of modern-day learners.
                                </p>
                            </div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Quick menu</div>
                            <ul class="footer_list">
                                <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(URL('/about')); ?>">About us</a></li>
                                <li><a href="<?php echo e(URL('/courses')); ?>">Courses</a></li>
                                <li><a href="<?php echo e(URL('/news')); ?>">News</a></li>
                                <li><a href="<?php echo e(URL('/contact')); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Useful Links</div>
                            <ul class="footer_list">
                                <li><a href="<?php echo e(URL('/')); ?>">Home</a></li>
                                <li><a href="<?php echo e(URL('/about')); ?>">About us</a></li>
                                <li><a href="<?php echo e(URL('/courses')); ?>">Courses</a></li>
                                <li><a href="<?php echo e(URL('/news')); ?>">News</a></li>
                                <li><a href="<?php echo e(URL('/contact')); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">Contact Us</div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Address:</div>
                                    <div class="footer_contact_line">ALearn Avenue, Yaba College of Technology, Lagos, Nigeria.</div>
                                </div>
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Phone:</div>
                                    <div class="footer_contact_line">(+234) 812 345 6789</div>
                                </div>
                                <div class="footer_contact_item">
                                    <div class="footer_contact_title">Email:</div>
                                    <div class="footer_contact_line">alearn@gmail.com</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>

<?php /**PATH C:\Dev\laravel\adaptivelearning\src\resources\views/layouts/client.blade.php ENDPATH**/ ?>