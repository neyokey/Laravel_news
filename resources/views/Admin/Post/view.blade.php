@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
          <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
          <a href="<?= url("/admin/post"); ?>">Post</a>
          <a href="" class="current">View</a>
        </div>
    </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>View post</h5>
        </div>
        <div class="widget-content nopadding ">
        <section class="well well__offset-3">
            <div class="container">
                <div class="row row__offset-2">
                    <div class="grid_6">
                        <div style="font-size: 30px; font-weight: bold;"><?= $post[0]->name ?></div>
                        <br>
                        <?php echo 'By: '.$post[0]->username.'<br><br> Time: '. $post[0]->insert_time;  ?>
                        <br>
                        <br>
                        <div><image width='100px' src='<?= $post[0]->image ?>'></image></div>
                    </div>
                    <div class="grid_2">
                        <br>
                        <br>
                        <?php echo '<i class="icon icon-eye-open"></i> '.$post[0]->view;  ?>
                    </div>
                    <div style="font-size: 20px" class="grid_3 center">
                    </div>
                </div>
                <div class="row row__offset-2" style="font-size: 15px">
                    <div class="grid_7 news_content">
                        <?php
                             echo $post[0]->content;
                        ?>
                    </div>
                    <div class="grid_2">
                    </div>
                    <div class="grid_3">
                        
                    </div>
                </div>
            </div>
        </section>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
