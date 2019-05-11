@extends('layouts.admin')

@section('head')

@section('content')
<div id="content">
    <div id="content-header">
        <div id="breadcrumb">
          <a href="<?= url("/admin/index"); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
          <a href="<?= url("/admin/comment"); ?>">Comment</a>
          <a href="" class="current">View</a>
        </div>
    </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>View comment</h5>
        </div>
        <div class="widget-content nopadding ">
        <section class="well well__offset-3">
            <div class="container">
                <?php
                    if($comment != null)
                    {
                ?>
                <div class="row row__offset-2">
                    <div class="grid_7">
                        <div style="font-size: 20px; font-weight: bold;"><?= $comment[0]->postname; ?></div>
                        <br>
                        <?php echo 'Name: '.$comment[0]->name.'<br><br> Email: '. $comment[0]->email;  ?>
                        <br>
                        <br>
                    </div>
                    <div class="grid_2">
                    </div>
                    <div style="font-size: 20px" class="grid_3 center">
                    </div>
                </div>
                <div class="row row__offset-2" style="font-size: 25px">
                    <div class="grid_7 news_content">
                        <?php
                             echo $comment[0]->content;
                        ?>
                    </div>
                    <div class="grid_2">
                    </div>
                    <div class="grid_3">
                        
                    </div>
                </div>
                <?php
                    }
                    else{
                       ?> 
                       <div class="row row__offset-2">
                        <div class="grid_7 center" style="font-size: 40px">
                            News not exist!
                        </div>
                        <div class="grid_2">
                        </div>
                        <div style="font-size: 20px" class="grid_3 center">
                        </div>
                    </div>
                       <?php
                    }
                ?>
            </div>
        </section>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
