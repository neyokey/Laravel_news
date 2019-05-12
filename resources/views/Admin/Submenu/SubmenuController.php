<?php

namespace App\Http\Controllers;

use App\submenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class SubmenuController extends Controller
{
	public function index($id = null)
	{
 		$name = 'submenu';
 		$submenu = DB::table('submenu')->where('menu_id', $id)->orderBy('position')->get();
        return view('admin.submenu.index',['submenu' => $submenu,'name' => $name]);
    }
    public function add(Request $request)
    {
        $name = 'submenu';
        if($request::post() != null)
        {
            DB::table('submenu')->insert(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
            return redirect()->action('SubmenuController@index');
        }
        return view('admin.submenu.add',['name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'submenu';
        $submenu = DB::table('submenu')->where('id', $id)->get();
    	if($request::post() != null)
    	{
            $old_position = $submenu[0]->position;
            $submenu2 = DB::table('submenu')->where('position', $request::post()['position'])->get();
            if($submenu2->isEmpty())
            {
                DB::table('submenu')
                    ->where('id', $id)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
            }
            else
            {
                $submenu2= $submenu2[0];
                DB::table('submenu')
                    ->where('position', $submenu2->position)
                    ->update(['position' => '-1']);
                DB::table('submenu')
                    ->where('id', $id)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
                DB::table('submenu')
                    ->where('position', '-1')
                    ->update(['position' => $old_position]);
            }
	        return redirect()->action('SubmenuController@index');
    	}
    	
        return view('admin.submenu.edit',['submenu' => $submenu,'name' => $name]);
    }
    public function deactivated($id)
    {
        DB::table('submenu')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('submenu')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
    public function delete($id)
    {
        DB::table('submenu')->where('id', $id)->delete();
        return redirect()->back();
    }
}