<!DOCTYPE html>
<head>
  <title>Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/admin/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/admin/grid.css"/>
  <link rel="stylesheet" href="css/admin/bootstrap-responsive.min.css"/>
  <link rel="stylesheet" href="css/admin/colorpicker.css"/>
  <link rel="stylesheet" href="css/admin/datepicker.css"/>
  <link rel="stylesheet" href="css/admin/uniform.css"/>
  <link rel="stylesheet" href="css/admin/uniform.css"/>
  <link rel="stylesheet" href="css/admin/select2.css"/>
  <link rel="stylesheet" href="css/admin/matrix-style.css"/>
  <link rel="stylesheet" href="css/admin/matrix-media.css"/>
  <link rel="stylesheet" href="css/admin/bootstrap-wysihtml5.css"/>
  <link rel="stylesheet" href="css/admin/font-awesome.css"/>
  <link rel="stylesheet" href="css/admin/admin.css"/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

  <script src="js/admin/jquery.min.js"></script>
</head>
<body>

  <!--Header-part-->

  <div id="header">
    <h1><a href="">Quản lí </a></h1>
  </div>
  <!--close-Header-part--> 


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"></span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href=""><i class="icon-user"></i> Thông tin tài khoản</a></li>
          <li class="divider" id='1'></li>
          <li class="divider"></li>
          <li><a href=""><i class="icon-key"></i> Đăng xuất</a></li>
        </ul>
      </li>
      <li><a href=""><i class="icon-arrow-left"></i> Trang chủ</a></li>
    </ul>
  </div>
  <div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul class="nav">
      <li>
       <a href=""><i class="icon icon-home"></i> <span>Dashboard</span></a> 
      </li>
      <li class="submenu">
        <a href="">
          <i class="icon icon-user"></i> <span>User</span><i style="float: right; line-height: 1" class="icon icon-arrow-down"></i>
        </a>
        <ul>
          <li class="active"> 
              <a href="">
              <i class="icon icon-user"></i> <span>User</span></a>
          </li>
          <li class=""> 
              <a href="">
              <i class="icon icon-group"></i> <span>User type</span></a>
          </li>
      </ul>
      <li class="submenu">
        <a href="">
          <i class="icon-list-alt"></i> <span>Post</span><i style="float: right; line-height: 1" class="icon icon-arrow-down"></i>
        </a>
        <ul>
          <li class="active"> 
              <a href="">
              <i class="icon-list-alt"></i> <span>Post</span></a>
          </li>
          <li class=""> 
              <a href="">
              <i class="icon-th-list"></i> <span>Post type</span></a>
          </li>
      </ul>
      <li>
       <a href=""><i class="icon icon-phone"></i> <span>Contact</span></a> 
      </li>
      <li>
       <a href=""><i class="icon icon-comment"></i> <span>Comment</span></a> 
      </li>
      <li>
       <a href=""><i class="icon icon-envelope"></i> <span>Message</span></a> 
      </li>
      <li>
       <a href=""><i class="icon icon-barcode"></i> <span>Menu</span></a> 
      </li>
    </ul>
  </div>
  <div id="content">
  @yield('content')
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script> 
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/vi.js"></script> 
  <script src="js/admin/daterangepicker/daterangepicker.js"></script> 
  <script src="js/admin/jquery.ui.custom.js"></script> 
  <script src="js/admin/jquery.ui.custom.js"></script> 
  <script src="js/admin/bootstrap.min.js"></script>
  <script src="js/admin/bootstrap-colorpicker.js"></script>
  <script src="js/admin/bootstrap-datepicker.js"></script>
  <script src="js/admin/masked.js"></script>
  <script src="js/admin/select2.min.js"></script>
  <script src="js/admin/matrix.js"></script>
  <script src="js/admin/matrix.form_common.js"></script>
  <script src="js/admin/wysihtml5-0.3.0.js"></script>
  <script src="js/admin/bootstrap-wysihtml5.js"></script>
  <script src="js/admin/jquery.peity.min.js"></script>
  <script src="js/admin/jquery.uniform.js"></script>

</body>
</html>


