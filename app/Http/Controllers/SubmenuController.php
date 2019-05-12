<?php

namespace App\Http\Controllers;

use App\submenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class SubmenuController extends Controller
{
	public function index($id = null)
	{
 		$name = 'submenu';
 		$submenu = DB::table('submenu')->where('menu_id', $id)
            ->join('menu', 'submenu.menu_id', '=', 'menu.id')
            ->select('submenu.*', 'menu.name as menuname')
            ->orderBy('position')->get();
        return view('admin.submenu.index',['submenu' => $submenu,'name' => $name,'id' => $id]);
    }
    public function add($id = null,$subid = null,Request $request)
    {
        $name = 'submenu';
        if($request::post() != null)
        {
            DB::table('submenu')->insert(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position'],'menu_id' => $id]);

            return redirect()->action('MenuController@index');
        }
        return view('admin.submenu.add',['name' => $name,'id' => $id]);
    }
    public function edit($id = null,$subid = null,Request $request)
    {
    	$name = 'submenu';
        $submenu = DB::table('submenu')->where('id', $subid)->get();
        if($submenu->isEmpty())
        {
            return Redirect::to(url('/admin/menu/'.$id.'/submenu/'));
        }
    	if($request::post() != null)
    	{
            $old_position = $submenu[0]->position;
            $submenu2 = DB::table('submenu')->where('position', $request::post()['position'])
                                            ->where('menu_id', $id)->get();
            if($submenu2->isEmpty())
            {
                DB::table('submenu')
                    ->where('id', $subid)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
            }
            else
            {
                $submenu2= $submenu2[0];
                DB::table('submenu')
                    ->where('id', $submenu2->id)
                    ->update(['position' => '-1']);
                DB::table('submenu')
                    ->where('id', $subid)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
                DB::table('submenu')
                    ->where('id', $submenu2->id)
                    ->update(['position' => $old_position]);
            }
	        return redirect()->action('MenuController@index');
    	}
        return view('admin.submenu.edit',['submenu' => $submenu,'name' => $name,'id' => $id]);
    }
    public function deactivated($id = null,$subid = null)
    {
        DB::table('submenu')
            ->where('id', $subid)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id = null,$subid = null)
    {
        DB::table('submenu')
            ->where('id', $subid)
            ->update(['status' => 1]);
        return redirect()->back();
    }
    public function delete($id = null,$subid = null)
    {
        DB::table('submenu')->where('id', $subid)->delete();
        return redirect()->back();
    }
}