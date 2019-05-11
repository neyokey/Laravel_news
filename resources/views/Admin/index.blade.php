@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="widget-content nopadding">
            <div class="quick-actions_homepage">
              <ul class="quick-actions">
                <li class="bg_lb"> <a href="admin/post">
                <i class="icon-list-alt"></i>Bạn có post chưa duyệt</a> </li> 
                <li class="bg_lg"> <a href="admin/comment">
                <i class="icon icon-comment"></i>Bạn có comment chưa duyệt</a> </li> 
                <li class="bg_dy"> <a href="admin/message">
                  <i class="icon icon-envelope"></i>Bạn có message chưa xem</a> 
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div> 
  </div>
</div>
@endsection     


