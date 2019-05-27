@extends('layouts.home1')

@section('head')

@section('content')

<div class="col-12 col-lg-8 col-xl-8">
    <div class="post-details-content">
        <!-- Blog Content -->
        <div class="blog-content">

            <!-- Post Content -->
            <div class="post-content mt-0">

                <a href="" class="post-title mb-2"><?= $post[0]->name ?></a>

                <div class="d-flex justify-content-between mb-30">
                    <div class="post-meta d-flex align-items-center">
                        By&nbsp;<a href="#" class="post-author"> <?= $post[0]->username ?></a>
                        <i class="fa fa-circle" aria-hidden="true"></i>
                        <a href="#" class="post-date"><?= $post[0]->insert_time ?></a>
                    </div>
                    <div class="post-meta d-flex">
                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?= $post[0]->view ?></a>
                    </div>
                </div>
                <img width='150px' src="<?= $post[0]->image ?>" alt="">
                <br>
                <br>  
            </div>
            <?= $post[0]->content ?>
            
                <br>  
                <br>
                <br> 
            <?php
                if(($comment->isnotEmpty()))
                {
                    ?>
                        <div class="comment_area clearfix mb-50">
                            <div class="section-heading style-2">
                                <h4>Comment</h4>
                                <div class="line"></div>
                            </div>
                            <ul>
                                <?php
                                    foreach ($comment as $value) {
                                        ?>
                                            <li class="single_comment_area">
                                            <div class="comment-content d-flex">
                                                <div class="comment-author text-center">
                                                    <img src="<?= url($value->image) ?>">
                                                </div>
                                                <div class="comment-meta">
                                                    <a href="#" class="comment-date"><?= $value->insert_time ?></a>
                                                    <h6><?= $value->name ?></h6>
                                                    <p><?= $value->content ?></p>
                                                    <div class="d-flex align-items-center">
                                                    </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    <?php
                }
                ?> 
            <div class="post-a-comment-area ">

                <div class="section-heading style-2">
                    <h4>Leave a reply</h4>
                    <div class="line"></div>
                </div>

                <!-- Reply Form -->
                <div class="contact-form-area">
                    @if($errors->has('fail'))
                      <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{$errors->first('fail')}}
                      </div>
                      @endif
                      @if($errors->has('success'))
                      <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          {{$errors->first('success')}}
                      </div>
                      @endif
                    <form action="<?= url('/add_comment/'.$post[0]->id)?>" method="post">
                        @csrf
                        <div class="row">
                            <?php
                                if(!(Auth::check()))
                                {
                            ?>
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" required="required" name="name" id="name" placeholder="Your Name*">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="email" class="form-control" required="required" name="email" id="email" placeholder="Your Email*">
                            </div>
                            <?php
                                }
                            ?>
                            <div class="col-12">
                                <textarea name="content" class="form-control" required="required" name="content" id="content" placeholder="Message*"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn vizew-btn mt-30" type="submit">Submit Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection