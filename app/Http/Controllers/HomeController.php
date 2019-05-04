<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function login()
    {
        return view('home.login');
    }
    public function archive_grid()
    {
        return view('home.archive_grid');
    }
    public function archive_list()
    {
        return view('home.archive_list');
    }
    public function single_post()
    {
        return view('home.single_post');
    }
    public function video_post()
    {
        return view('home.video_post');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function typography()
    {
        return view('home.typography');
    }
}