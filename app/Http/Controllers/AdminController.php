<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('admin.login');
    }
    public function archive_grid()
    {
        return view('admin.archive_grid');
    }
    public function archive_list()
    {
        return view('admin.archive_list');
    }
    public function single_post()
    {
        return view('admin.single_post');
    }
    public function video_post()
    {
        return view('admin.video_post');
    }
    public function contact()
    {
        return view('admin.contact');
    }
    public function typography()
    {
        return view('admin.typography');
    }
}