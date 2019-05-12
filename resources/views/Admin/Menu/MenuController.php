<?php

namespace App\Http\Controllers;

use App\menu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class menuController extends Controller
{
	public function index()
	{
 		$name = 'menu';
 		$menu = DB::table('menu')->get();
        return view('admin.menu.index',['menu' => $menu,'name' => $name]);
    }
 
    public function edit($id = null,Request $request)
    {
    	$name = 'menu';
    	if($request::post() != null)
    	{
			DB::table('menu')
	            ->where('id', $id)
	            ->update(['name' => $request::post()['name']]);
	        return redirect()->action('menuController@index');
    	}
    	$menu = DB::table('menu')->where('id', $id)->get();
        return view('admin.menu.edit',['menu' => $menu,'name' => $name]);
    }
    public function deactivated($id)
    {
        DB::table('menu')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('menu')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('menu')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}