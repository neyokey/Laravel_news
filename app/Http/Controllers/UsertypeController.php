<?php

namespace App\Http\Controllers;

use App\usertype;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class UsertypeController extends Controller
{
	public function index()
	{
 		$name = 'usertype';
 		$usertype = DB::table('usertype')->get();
        return view('admin.usertype.index',['usertype' => $usertype,'name' => $name]);
    }
    public function add(Request $request)
    {
        $name = 'usertype';
        if($request::post() != null)
        {
            DB::table('usertype')->insert(['name' => $request::post()['name']]);
            return redirect()->action('UsertypeController@index');
        }
        return view('admin.usertype.add',['name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'usertype';
    	if($request::post() != null)
    	{
			DB::table('usertype')
	            ->where('id', $id)
	            ->update(['name' => $request::post()['name']]);
	        return redirect()->action('UsertypeController@index');
    	}
    	$usertype = DB::table('usertype')->where('id', $id)->get();
        if($usertype->isEmpty())
        {
            return Redirect::to(url('/admin/usertype/'));
        }
        return view('admin.usertype.edit',['usertype' => $usertype,'name' => $name]);
    }
    public function deactivated($id)
    {
        DB::table('usertype')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('usertype')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}