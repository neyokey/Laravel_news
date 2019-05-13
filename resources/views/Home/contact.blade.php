@extends('layouts.home1')

@section('head')

@section('content')
    <div class="col-12 col-md-7 col-lg-8">
        <!-- Section Heading -->
        <div class="section-heading style-2">
            <h4>Contact</h4>
            <div class="line"></div>
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

        <!-- Contact Form Area -->
        <div class="contact-form-area mt-50">
            @if($errors->has('failSent'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{$errors->first('failSent')}}
            </div>
            @endif
            @if($errors->has('successSent'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{$errors->first('successSent')}}
            </div>
            @endif
            <form action="<?= url('admin/message/add')?>" method="post">
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