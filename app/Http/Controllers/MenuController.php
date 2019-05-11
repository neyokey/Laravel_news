<?php

namespace App\Http\Controllers;

use App\menu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class MenuController extends Controller
{
	public function index()
	{
 		$name = 'menu';
 		$menu = DB::table('menu')->orderBy('position')->get();
        return view('admin.menu.index',['menu' => $menu,'name' => $name]);
    }
    public function add(Request $request)
    {
        $name = 'menu';
        if($request::post() != null)
        {
            DB::table('menu')->insert(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
            return redirect()->action('MenuController@index');
        }
        return view('admin.menu.add',['name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'menu';
        $menu = DB::table('menu')->where('id', $id)->get();
    	if($request::post() != null)
    	{
            $old_position = $menu[0]->position;
            $menu2 = DB::table('menu')->where('position', $request::post()['position'])->get();
            if($menu2->isEmpty())
            {
                DB::table('menu')
                    ->where('id', $id)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
            }
            else
            {
                $menu2= $menu2[0];
                DB::table('menu')
                    ->where('position', $menu2->position)
                    ->update(['position' => '-1']);
                DB::table('menu')
                    ->where('id', $id)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
                DB::table('menu')
                    ->where('position', '-1')
                    ->update(['position' => $old_position]);
            }
	        return redirect()->action('MenuController@index');
    	}
    	
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
        DB::table('menu')->where('id', $id)->delete();
        return redirect()->back();
    }
}