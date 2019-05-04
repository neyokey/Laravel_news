<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Title -->
        <title>Blog</title>

        <!-- Favicon -->
        <link rel="icon" href="img/core-img/favicon.ico">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css/front/style.css">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- Top Header Area -->
            <div class="top-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="top-meta-data d-flex align-items-center justify-content-end">
                                <!-- Top Social Info -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                                <!-- Top Search Area -->
                                <div class="top-search-area">
                                    <form action="index" method="post">
                                        <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                                <!-- Login -->
                                <a href="login" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Area -->
            <div class="vizew-main-menu" id="sticker">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">

                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="vizewNav">

                            <!-- Nav brand -->
                            <a href="index" class="nav-brand"><img src="img/front/core-img/logo.png" alt=""></a>

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <div class="classy-menu">

                                <!-- Close Button -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li class="active"><a href="index">Home</a></li>
                                        <li><a href="archive_list">Archives</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="index">- Home</a></li>
                                                <li><a href="archive_list">- Archive List</a></li>
                                                <li><a href="archive_grid">- Archive Grid</a></li>
                                                <li><a href="single_post">- Single Post</a></li>
                                                <li><a href="video_post">- Single Video Post</a></li>
                                                <li><a href="contact">- Contact</a></li>
                                                <li><a href="typography">- Typography</a></li>
                                                <li><a href="login">- Login</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Features</a>
                                            <div class="megamenu">
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="index">- Home</a></li>
                                                    <li><a href="archive_list">- Archive List</a></li>
                                                    <li><a href="archive_grid">- Archive Grid</a></li>
                                                    <li><a href="single_post">- Single Post</a></li>
                                                    <li><a href="video_post">- Single Video Post</a></li>
                                                    <li><a href="contact">- Contact</a></li>
                                                    <li><a href="typography">- Typography</a></li>
                                                    <li><a href="login">- Login</a></li>
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="index">- Home</a></li>
                                                    <li><a href="archive_list">- Archive List</a></li>
                                                    <li><a href="archive_grid">- Archive Grid</a></li>
                                                    <li><a href="single_post">- Single Post</a></li>
                                                    <li><a href="video_post">- Single Video Post</a></li>
                                                    <li><a href="contact">- Contact</a></li>
                                                    <li><a href="typography">- Typography</a></li>
                                                    <li><a href="login">- Login</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="contact">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="vizew-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="vizew-post-area mb-50">
            <div class="container">
                <div class="row">  
                </div>
                <div class="row">
                    @yield('content')
                    <div class="col-12 col-md-5 col-lg-4">
                        <div class="sidebar-area">
                            <!-- ***** Single Widget ***** -->
                            <div class="single-widget mb-50">
                                <!-- Section Heading -->
                                <div class="section-heading style-2 mb-30">
                                    <h4>Most Viewed Playlist</h4>
                                    <div class="line"></div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <img src="img/front/bg-img/1.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <img src="img/front/bg-img/2.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <img src="img/front/bg-img/36.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Sweet Yummy Chocolate in the</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <img src="img/front/bg-img/37.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">DC Shoes: gymkhana five; the making of</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex">
                                    <div class="post-thumbnail">
                                        <img src="img/front/bg-img/38.jpg" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">How To Make Orange Chicken Recipe?</a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Single Widget ***** -->
                            <div class="single-widget followers-widget mb-50">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="counter">198</span><span>Fan</span></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span class="counter">220</span><span>Followers</span></a>
                                <a href="#" class="google"><i class="fa fa-google" aria-hidden="true"></i><span class="counter">140</span><span>Subscribe</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Vizew Psot Area End ##### -->

        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-xl-6">
                        <div class="footer-widget mb-70">
                            <!-- Logo -->
                            <a href="index" class="foo-logo d-block mb-4"><img src="img/front/core-img/logo2.png" alt=""></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                            <!-- Footer Newsletter Area -->
                            <div class="footer-nl-area">
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
                                    <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-xl-6">
                        <div class="footer-widget mb-70 text-right">
                            <h6 class="widget-title">Our Address</h6>
                            <!-- Contact Address -->
                            <div class="contact-address  text-right">
                                <p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
                                <p>Phone: 001-1234-88888</p>
                                <p>Email: info.colorlib@gmail.com</p>
                            </div>
                            <!-- Footer Social Area -->
                            <div class="footer-social-area">
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copywrite Area -->
            <div class="copywrite-area">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Copywrite Text -->
                        <div class="col-12 col-sm-6">
                            <p class="copywrite-text"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="js/front/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/front/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/front/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/front/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/front/active.js"></script>
    </body>
</html>