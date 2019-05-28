<?php

namespace App\Http\Controllers;

use App\menu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class MenuController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
	public function index()
	{
 		$name = 'menu';
 		$menu = DB::table('menu')->orderBy('position')->paginate(7);
        return view('admin.menu.index',['menu' => $menu,'name' => $name]);
    }
    public function add(Request $request)
    {
        $name = 'menu';
        if($request::post() != null)
        {
            $menu = DB::table('menu')->where('position',$request::post()['position'])->get();
            if($menu->isEmpty())
            {
                if(DB::table('menu')->insert(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]))
                    $message = new MessageBag(['success' => 'Add menu successfully']);
                else
                    $message = new MessageBag(['error' => 'Add menu error']);
                return redirect()->action('MenuController@index')->withInput()->withErrors($message);
            }
            else
            {
                $message = new MessageBag(['position' => 'Duplicate position']);
                return redirect()->back()->withInput()->withErrors($message);
            }
            
        }
        return view('admin.menu.add',['name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'menu';
        $menu = DB::table('menu')->where('id', $id)->get();
        if($menu->isEmpty())
        {
            return Redirect::to(url('/admin/menu/'));
        }
    	if($request::post() != null)
    	{
            $old_position = $menu[0]->position;
            $menu2 = DB::table('menu')->where('position', $request::post()['position'])->get();
            if($menu2->isEmpty())
            {
                DB::table('menu')
                    ->where('id', $id)
                    ->update(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position']]);
                $message = new MessageBag(['success' => 'Edit menu successfully']);
                return redirect()->action('MenuController@index')->withInput()->withErrors($message);
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
                $message = new MessageBag(['success' => 'Edit menu successfully']);
                return redirect()->action('MenuController@index')->withInput()->withErrors($message);
            }
            $message = new MessageBag(['error' => 'Edit menu error']);
	        return redirect()->action('MenuController@index');
    	}
    	
        return view('admin.menu.edit',['menu' => $menu,'name' => $name]);
    }
    public function deactivated($id)
    {
        if(DB::table('menu')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Change stastus successfully']);
        else
            $message = new MessageBag(['error' => 'Change stastus error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('menu')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Change stastus successfully']);
        else
            $message = new MessageBag(['error' => 'Change stastus error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function delete($id)
    {
        if($id == '19' )
        {
            $message = new MessageBag(['error' => 'Cant delete this menu']);
        }
        else
        {
            if(DB::table('menu')->where('id', $id)->delete())
                $message = new MessageBag(['success' => 'Delete menu successfully']);
            else
                $message = new MessageBag(['error' => 'Delete menu error']);
        }
        return redirect()->back()->withInput()->withErrors($message);
    }
}