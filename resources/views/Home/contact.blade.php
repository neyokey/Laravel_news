@extends('layouts.home1')

@section('head')

@section('content')
    <div class="col-12 col-md-7 col-lg-8">
        <!-- Section Heading -->
        <div class="section-heading style-2">
            <h4>Contact</h4>
            <div class="line"></div>
        </div>

            <blockquote class="vizew-blockquote mb-15">
                <h5 style="color: white">Address: <?= $data['contact'][0]->address ?></h5>
                <h5 style="color: white">Phone: <?= $data['contact'][0]->phone ?></h5>
                <h5 style="color: white">Email: <?= $data['contact'][0]->email ?></h5>
                <div class="post-tags mt-30">
                    <ul>
                        <li><a href="<?= $data['contact'][0]->link_fb ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?= $data['contact'][0]->link_ins ?>" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="<?= $data['contact'][0]->link_yt ?>" class="youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </blockquote>
        <br>
        <br>
        <div class="section-heading style-2">
            <h4>Message form</h4>
            <div class="line"></div>
        </div>
        <p>Sent we some message</p>
        <div class="contact-form-area mt-50">
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
            <form action="<?= url('/add_message')?>" method="post">
            @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" required="required" id="name" name='name'>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" required="required" id="email" name='email'>
                </div>
                <div class="form-group">
                    <label for="content">Message</label>
                    <textarea name="content" class="form-control" required="required" id="content" cols="30" rows="10" name='content'></textarea>
                </div>
                <button class="btn vizew-btn mt-30" type="submit">Send Now</button>
            </form>
        </div>
    </div>
@endsection