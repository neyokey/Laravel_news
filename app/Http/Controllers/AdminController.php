<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class AdminController extends Controller
{
    public function index($name = null)
    {
        $name = 'index';
        $comment = DB::table('comment')->where('status','0')->get()->count();
        $post = DB::table('post')->where('status','0')->get()->count();
        $message = DB::table('message')->where('status','0')->get()->count();
        return view('admin.index',['name' => $name,'comment' => $comment,'post' => $post,'message' => $message]);
    }
}