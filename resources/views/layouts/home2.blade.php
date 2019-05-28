<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $data['contact'][0]->brand_name ?></title>
        <link rel="icon" href="<?= url("/img/core-img/favicon.ico"); ?>">
        <link rel="stylesheet" href="<?= url("/css/home/style.css"); ?>">
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
            <div class="vizew-main-menu" id="sticker">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">

                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="vizewNav">

                            <!-- Nav brand -->
                            <a href="<?= url('/') ?>" class="nav-brand"><h2 style="color: white"><?= $data['contact'][0]->brand_name ?></h2></a>

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
                                        <?php
                                            foreach ($data['menu'] as $value) {
                                                if($value->link == '')
                                                {
                                                    if(Auth::check() == false && $value->id =='19')
                                                        continue;
                                                    echo '<li><a href="#">'.$value->name.'</a><ul class="dropdown">';
                                                    foreach ($data['submenu'] as $subvalue) {
                                                        if($subvalue->menu_id == $value->id)
                                                            echo '<li><a href="'.url($subvalue->link).'">-'.$subvalue->name.'</a></li>';
                                                    }
                                                    echo '</ul></li>';
                                                }
                                                else
                                                {
                                                    echo '<li';
                                                    if($name == $value->name)
                                                        echo ' class="active"';
                                                    echo '><a href="'.url($value->link).'">'.$value->name.'</a></li>';
                                                }
                                            }
                                        ?>
                                        <li>
                                            <?php 
                                                if(Auth::check())
                                                    echo '';
                                                else
                                                    echo '<a href='.url("/login").'><i class="fa fa-user" aria-hidden="true"></i></a>';
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
        <div class="vizew-breadcrumb">
        <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
        <!-- ##### Footer Area Start ##### -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-xl-12">
                        <div class="footer-widget mb-20 text-right">
                            <h6 class="widget-title" style="color: white">Our Address</h6>
                            <!-- Contact Address -->
                            <div class="contact-address  text-right">
                                <p><?= $data['contact'][0]->address ?></p>
                                <p><?= $data['contact'][0]->phone ?></p>
                                <p>Email: <?= $data['contact'][0]->email ?></p>
                            </div>
                            <!-- Footer Social Area -->
                            <div class="footer-social-area">
                                <a href="<?= $data['contact'][0]->link_fb ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $data['contact'][0]->link_ins ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="<?= $data['contact'][0]->link_yt ?>" class="youtube"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <p class="copywrite-text text-center"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="<?= url("/js/home/jquery/jquery-2.2.4.min.js"); ?>"></script>
        <script src="<?= url("/js/home/bootstrap/popper.min.js"); ?>"></script>
        <script src="<?= url("/js/home/bootstrap/bootstrap.min.js"); ?>"></script>
        <script src="<?= url("/js/home/plugins/plugins.js"); ?>"></script>
        <script src="<?= url("/js/home/active.js"); ?>"></script>
    </body>
</html>