<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Support\MessageBag;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
	public function index($id= null,Request $request)
	{
        $name = 'post';
 		$post = DB::table('post')
            ->join('posttype', 'post.posttype_id', '=', 'posttype.id')
            ->join('user', 'post.user_id', '=', 'user.id')
            ->select('post.*', 'posttype.name as postypename','user.name as username')
            ->orderBy('id','desc')
            ->paginate(7);
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
    public function add(Request $request)
    {
        $name = 'post';
        if($request::post() != null)
        {
            if(DB::table('post')
                ->insert(['name' => $request::post()['name'],'image' => $request::post()['image'],'content' => $request::post()['content'],'view' => $request::post()['view'],'posttype_id' => $request::post()['posttype_id'],'user_id' => Auth::user()->id]))
                $message = new MessageBag(['success' => 'Add post success']);
            else
                $message = new MessageBag(['error' => 'Add post error']);
            return redirect()->action('PostController@index')->withInput()->withErrors($message);
        }
        $posttype = DB::table('posttype')->where('status', '1')->get();
        return view('admin.post.add',['posttype' => $posttype,'name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'post';
    	if($request::post() != null)
    	{
            if(DB::table('post')->where('id', $id)
                ->update(['name' => $request::post()['name'],'image' => $request::post()['image'],'content' => $request::post()['content'],'view' => $request::post()['view'],'posttype_id' => $request::post()['posttype_id']]))
                $message = new MessageBag(['success' => 'Edit post success']);
            else
                $message = new MessageBag(['error' => 'Edit post error']);
            return redirect()->action('PostController@index')->withInput()->withErrors($message);
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
        if(DB::table('post')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Deactivated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('post')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Activated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function denied($id)
    {
        if(DB::table('post')->where('id', $id)->update(['status' => 2]))
            $message = new MessageBag(['success' => 'Denied success']);
        else
            $message = new MessageBag(['error' => 'Denied error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}