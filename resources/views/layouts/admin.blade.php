<!DOCTYPE html>
<head>
  <title>Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?= url("/css/admin/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/grid.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/bootstrap-responsive.min.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/colorpicker.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/datepicker.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/uniform.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/uniform.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/select2.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/matrix-style.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/matrix-media.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/bootstrap-wysihtml5.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/font-awesome.css"); ?>">
  <link rel="stylesheet" href="<?= url("/css/admin/admin.css"); ?>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

  <script src="<?= url("/js/admin/jquery.min.js"); ?>"></script>
</head>
<body>

  <!--Header-part-->

  <div id="header">
    <h1><a>Admin</a></h1>
  </div>
  <!--close-Header-part--> 


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li><a href="<?= url("/index"); ?>"><i class="icon-arrow-left"></i> Home</a></li>
    </ul>
  </div>
  <div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul class="nav">
      <li>
       <a href="<?= url("/admin/index"); ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> 
      </li>
      <li class="submenu <?php if($name =='user' || $name =='usertype') echo 'open'; ?>">
        <a href="">
          <i class="icon icon-user"></i> <span>User</span><i style="float: right; line-height: 1" class="icon icon-arrow-down"></i>
        </a>
        <ul>
          <li class="<?php if($name =='user') echo 'active'; ?>"> 
              <a href="<?= url("/admin/user"); ?>">
              <i class="icon icon-user"></i> <span>User</span></a>
          </li>
          <li class="<?php if($name =='usertype') echo 'active'; ?>">
              <a href="<?= url("/admin/usertype"); ?>">
              <i class="icon icon-group"></i> <span>User type</span></a>
          </li>
      </ul>
      <li class="submenu <?php if($name =='post' || $name =='posttype') echo 'open'; ?>">
        <a href="">
          <i class="icon-list-alt"></i> <span>Post</span><i style="float: right; line-height: 1" class="icon icon-arrow-down"></i>
        </a>
        <ul>
          <li class="<?php if($name =='post') echo 'active'; ?>"> 
              <a href="<?= url("/admin/post"); ?>">
              <i class="icon-list-alt"></i> <span>Post</span></a>
          </li>
          <li class="<?php if($name =='posttype') echo 'active'; ?>"> 
              <a href="<?= url("/admin/posttype"); ?>">
              <i class="icon-th-list"></i> <span>Post type</span></a>
          </li>
      </ul>
      <li class="<?php if($name =='contact') echo 'active'; ?>">
       <a href="<?= url("/admin/contact"); ?>"><i class="icon icon-phone"></i> <span>Contact</span></a> 
      </li>
      <li class="<?php if($name =='comment') echo 'active'; ?>">
       <a href="<?= url("/admin/comment"); ?>"><i class="icon icon-comment"></i> <span>Comment</span></a> 
      </li>
      <li class="<?php if($name =='message') echo 'active'; ?>">
       <a href="<?= url("/admin/message"); ?>"><i class="icon icon-envelope"></i> <span>Message</span></a> 
      </li>
      <li class="<?php if($name =='menu') echo 'active'; ?>">
       <a href="<?= url("/admin/menu"); ?>"><i class="icon icon-barcode"></i> <span>Menu</span></a> 
      </li>
    </ul>
  </div>
  
  @yield('content')

  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"); ?>"></script> 
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/vi.js"); ?>"></script>
  <script src="<?= url("/js/admin/jquery.ui.custom.js"); ?>"></script> 
  <script src="<?= url("/js/admin/jquery.ui.custom.js"); ?>"></script> 
  <script src="<?= url("/js/admin/bootstrap.min.js"); ?>"></script>
  <script src="<?= url("/js/admin/bootstrap-colorpicker.js"); ?>"></script>
  <script src="<?= url("/js/admin/bootstrap-datepicker.js"); ?>"></script>
  <script src="<?= url("/js/admin/masked.js"); ?>"></script>
  <script src="<?= url("/js/admin/select2.min.js"); ?>"></script>
  <script src="<?= url("/js/admin/matrix.js"); ?>"></script>
  <script src="<?= url("/js/admin/matrix.form_common.js"); ?>"></script>
  <script src="<?= url("/js/admin/wysihtml5-0.3.0.js"); ?>"></script>
  <script src="<?= url("/js/admin/bootstrap-wysihtml5.js"); ?>"></script>
  <script src="<?= url("/js/admin/jquery.peity.min.js"); ?>"></script>
  <script src="<?= url("/js/admin/jquery.uniform.js"); ?>"></script>

</body>
</html>


