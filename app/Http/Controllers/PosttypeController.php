<?php

namespace App\Http\Controllers;

use App\posttype;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class PosttypeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
	public function index()
	{
 		$name = 'posttype';
 		$posttype = DB::table('posttype')->paginate(7);
        return view('admin.posttype.index',['posttype' => $posttype,'name' => $name]);
    }
    public function add(Request $request)
    {
        $name = 'posttype';
        if($request::post() != null)
        {
            if(DB::table('posttype')->insert(['name' => $request::post()['name']]))
                    $message = new MessageBag(['success' => 'Edit user type success']);
                else
                    $message = new MessageBag(['error' => 'Edit user type error']);
                 return redirect()->action('PosttypeController@index')->withInput()->withErrors($message);
        }
        return view('admin.posttype.add',['name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'posttype';
    	if($request::post() != null)
    	{
            if(DB::table('posttype')
                ->where('id', $id)
                ->update(['name' => $request::post()['name']]))
                    $message = new MessageBag(['success' => 'Edit user type success']);
                else
                    $message = new MessageBag(['error' => 'Edit user type error']);
                 return redirect()->action('PosttypeController@index')->withInput()->withErrors($message);
    	}
    	$posttype = DB::table('posttype')->where('id', $id)->get();
        if($posttype->isEmpty())
        {
            return Redirect::to(url('/admin/posttype/'));
        }
        return view('admin.posttype.edit',['posttype' => $posttype,'name' => $name]);
    }
    public function deactivated($id)
    {
        if(DB::table('posttype')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Deactivated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('posttype')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Activated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}