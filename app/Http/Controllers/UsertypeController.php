<?php

namespace App\Http\Controllers;

use App\usertype;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class UsertypeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
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
            if(DB::table('usertype')->insert(['name' => $request::post()['name']]))
                    $message = new MessageBag(['success' => 'Edit user type success']);
                else
                    $message = new MessageBag(['error' => 'Edit user type error']);
                return redirect()->action('UsertypeController@index')->withInput()->withErrors($message);
        }
        return view('admin.usertype.add',['name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'usertype';
    	if($request::post() != null)
    	{
            if(DB::table('usertype')
                ->where('id', $id)
                ->update(['name' => $request::post()['name']]))
                    $message = new MessageBag(['success' => 'Edit user type success']);
                else
                    $message = new MessageBag(['error' => 'Edit user type error']);
                return redirect()->action('UsertypeController@index')->withInput()->withErrors($message);
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
        if(DB::table('usertype')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Deactivated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('usertype')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Activated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}