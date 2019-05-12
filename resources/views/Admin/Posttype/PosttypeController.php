<?php

namespace App\Http\Controllers;

use App\posttype;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class PosttypeController extends Controller
{
	public function index()
	{
 		$name = 'posttype';
 		$posttype = DB::table('posttype')->get();
        return view('admin.posttype.index',['posttype' => $posttype,'name' => $name]);
    }
 
    public function edit($id = null,Request $request)
    {
    	$name = 'posttype';
    	if($request::post() != null)
    	{
			DB::table('posttype')
	            ->where('id', $id)
	            ->update(['name' => $request::post()['name']]);
	        return redirect()->action('posttypeController@index');
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
        DB::table('posttype')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('posttype')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}