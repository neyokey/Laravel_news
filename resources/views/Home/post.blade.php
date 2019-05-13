@extends('layouts.home1')

@section('head')

@section('content')

<div class="col-12 col-lg-8 col-xl-7">
    <div class="post-details-content">
        <!-- Blog Content -->
        <div class="blog-content">

            <!-- Post Content -->
            <div class="post-content mt-0">

                <a href="single-post.html" class="post-title mb-2"><?= $post[0]->name ?></a>

                <div class="d-flex justify-content-between mb-30">
                    <div class="post-meta d-flex align-items-center">
                        <a href="#" class="post-author">By <?= $post[0]->username ?></a>
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

            <!-- Related Post Area -->
            <div class="related-post-area mt-5">
                <!-- Section Title -->
                <div class="section-heading style-2">
                    <h4>Related Post</h4>
                    <div class="line"></div>
                </div>

                <div class="row">

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-post-area mb-50">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/11.jpg" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata cata-sm cata-success">Sports</a>
                                <a href="single-post.html" class="post-title">Warner Bros. Developing ‘The accountant’ Sequel</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 22</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 16</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 15</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="col-12 col-md-6">
                        <div class="single-post-area mb-50">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/bg-img/12.jpg" alt="">

                                <!-- Video Duration -->
                                <span class="video-duration">05.03</span>
                            </div>

                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="post-cata cata-sm cata-danger">Game</a>
                                <a href="single-post.html" class="post-title">Searching for the 'angel' who held me on Westminste</a>
                                <div class="post-meta d-flex">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 28</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 17</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 22</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comment Area Start -->
            <div class="comment_area clearfix mb-50">

                <!-- Section Title -->
                <div class="section-heading style-2">
                    <h4>Comment</h4>
                    <div class="line"></div>
                </div>

                <ul>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img src="img/bg-img/31.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#" class="comment-date">27 Aug 2019</a>
                                <h6>Tomas Mandy</h6>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="like">like</a>
                                    <a href="#" class="reply">Reply</a>
                                </div>
                            </div>
                        </div>

                        <ol class="children">
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/32.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">27 Aug 2019</a>
                                        <h6>Britney Millner</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="like">like</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </li>

                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                        <!-- Comment Content -->
                        <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                                <img src="img/bg-img/33.jpg" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                                <a href="#" class="comment-date">27 Aug 2019</a>
                                <h6>Simon Downey</h6>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                <div class="d-flex align-items-center">
                                    <a href="#" class="like">like</a>
                                    <a href="#" class="reply">Reply</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Post A Comment Area -->
            <div class="post-a-comment-area">

                <!-- Section Title -->
                <div class="section-heading style-2">
                    <h4>Leave a reply</h4>
                    <div class="line"></div>
                </div>

                <!-- Reply Form -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <input type="text" class="form-control" id="name" placeholder="Your Name*">
                            </div>
                            <div class="col-12 col-lg-6">
                                <input type="email" class="form-control" id="email" placeholder="Your Email*">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" placeholder="Message*"></textarea>
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