<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PostController extends Controller
{
	public function index(Request $request)
	{
        $name = 'post';
 		$post =  DB::table('post')->get();
        return view('admin.post.index',['post' => $post,'name' => $name]);
    }
}