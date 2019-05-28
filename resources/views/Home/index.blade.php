@extends('layouts.home1')

@section('head')

@section('content')
    <div class="col-12 col-md-7 col-lg-8">
        @if($errors->has('successlogin'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{$errors->first('successlogin')}}
        </div>
        @endif
        <div class="all-posts-area">
            <div class="section-heading style-2">
                <h4>Latest News</h4>
                <div class="line"></div>
            </div>
            <div class="row mb-30">
                <?php 
                    foreach ($post as $value) {
                            $maxPos = 50;
                            if (strlen($value->name) > $maxPos)
                            {
                                $lastPos = ($maxPos - 3) - strlen($value->name);
                                $value->name = substr($value->name, 0, strrpos($value->name, ' ', $lastPos)) . '...';
                            }
                        ?>
                            <div class="col-12 col-lg-6">
                                <div class="single-blog-post style-3 d-flex mb-50">
                                    <div class="post-thumbnail">
                                        <img src="<?= $value->image ?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="<?= url('/post/'.$value->id) ?>" class="post-title"><?= $value->name ?></a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"></i> <?= $value->insert_time ?></a></a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?= $value->view ?></a></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>

            </div>
            {{ $post->render("pagination::home") }}
        </div>
    </div>
@endsection
