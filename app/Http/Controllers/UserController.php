<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class UserController extends Controller
{
	public function index()
	{
 		$name = 'user';
 		$user = DB::table('user')
            ->join('usertype', 'user.usertype_id', '=', 'usertype.id')
            ->select('user.*', 'usertype.name as typename')
            ->get();
        return view('admin.user.index',['user' => $user,'name' => $name]);
    }
 
    public function edit($id = null,Request $request)
    {
    	$name = 'user';
    	if($request::post() != null)
    	{
			DB::table('user')
	            ->where('id', $id)
	            ->update(['name' => $request::post()['name'],'email' => $request::post()['email'],'password' => $request::post()['password'],'usertype_id' => $request::post()['usertype']]);
	        return redirect()->action('UserController@index');
    	}
    	$user = DB::table('user')->where('id', $id)->get();
    	$usertype = DB::table('usertype')->where('status', '1')->get();
        return view('admin.user.edit',['user' => $user,'usertype' => $usertype,'name' => $name]);
    }
    public function deactivated($id)
    {
        DB::table('user')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('user')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}