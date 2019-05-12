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
                <li class="bg_lb"> 
                  <a href="<?= url('admin/post')?>">
                  <i class="icon-list-alt"></i>
                  <?php
                    if($post == 0)
                      echo "You have no unapproved posts";
                    else
                      echo 'You have '.$post.' unread posts';
                  ?>
                  </a> 
                </li> 
                <li class="bg_lg"> 
                  <a href="<?= url('admin/comment')?>">
                  <i class="icon icon-comment"></i>
                    <?php
                      if($comment == 0)
                        echo "You have no unapproved comments";
                      else
                        echo 'You have '.$comment.' unread comment';
                    ?>
                  </a> 
                </li> 
                <li class="bg_dy"> 
                  <a href="<?= url('admin/message')?>">
                  <i class="icon icon-envelope"></i>
                  <?php
                    if($message == 0)
                      echo "You have no unapproved messages";
                    else
                      echo 'You have '.$message.' unread messages';
                  ?>
                  </a> 
                </li>
              </ul>
            </div>
        </div>
      </div>
    </div> 
  </div>
</div>
@endsection     


