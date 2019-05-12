<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
	public function index($id= null,Request $request)
	{
        $name = 'post';
 		$post = DB::table('post')
            ->join('posttype', 'post.posttype_id', '=', 'posttype.id')
            ->join('user', 'post.user_id', '=', 'user.id')
            ->select('post.*', 'posttype.name as postypename','user.name as username')
            ->get();
        return view('admin.post.index',['post' => $post,'name' => $name]);
    }
    public function view($id= null)
    {
        $name = 'post';
        $post = DB::table('post')
        	->where('post.id', $id)
            ->join('posttype', 'post.posttype_id', '=', 'posttype.id')
            ->join('user', 'post.user_id', '=', 'user.id')
            ->select('post.*', 'posttype.name as postypename','user.name as username')
            ->get();
        if($post->isEmpty())
        {
            return Redirect::to(url('/admin/post'));
        }
        return view('admin.post.view',['post' => $post,'name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'post';
    	if($request::post() != null)
    	{
			DB::table('post')
	            ->where('id', $id)
	            ->update(['name' => $request::post()['name'],'content' => $request::post()['content'],'view' => $request::post()['view'],'posttype_id' => $request::post()['posttype_id']]);
	        return redirect()->action('PostController@index');
    	}
    	$post = DB::table('post')->where('id', $id)->get();
        if($post->isEmpty())
        {
            return Redirect::to(url('/admin/post'));
        }
    	$posttype = DB::table('posttype')->where('status', '1')->get();
        return view('admin.post.edit',['post' => $post,'posttype' => $posttype,'name' => $name]);
    }
    public function deactivated($id)
    {
        DB::table('post')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('post')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
    public function denied($id)
    {
        DB::table('post')
            ->where('id', $id)
            ->update(['status' => 2]);
        return redirect()->back();
    }
}