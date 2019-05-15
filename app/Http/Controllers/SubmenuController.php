<?php

namespace App\Http\Controllers;

use App\submenu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class SubmenuController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
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
            $submenu = DB::table('submenu')->where('position',$request::post()['position'])
                                        ->where('menu_id',$id)->get();
            if($submenu->isEmpty())
            {
                if(DB::table('submenu')->insert(['name' => $request::post()['name'],'link' => $request::post()['link'],'position' => $request::post()['position'],'menu_id' => $id]))
                    $message = new MessageBag(['success' => 'Add smenu successfully']);
                else
                    $message = new MessageBag(['error' => 'Add smenu error']);
                return redirect()->action('SubmenuController@index',['id' => $id])->withInput()->withErrors($message);
            }
            else
            {
                $message = new MessageBag(['position' => 'Duplicate position']);
                return redirect()->back()->withInput()->withErrors($message);
            }
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
                $message = new MessageBag(['success' => 'Edit submenu successfully']);
                return redirect()->action('SubmenuController@index',['id' => $id])->withInput()->withErrors($message);
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
                $message = new MessageBag(['success' => 'Edit submenu successfully']);
                return redirect()->action('SubmenuController@index',['id' => $id])->withInput()->withErrors($message);
            }
	        $message = new MessageBag(['error' => 'Edit submenu error']);
            return redirect()->action('SubmenuController@index',['id' => $id])->withInput()->withErrors($message);
    	}
        return view('admin.submenu.edit',['submenu' => $submenu,'name' => $name,'id' => $id]);
    }
    public function deactivated($id = null, $subid = null)
    {
        if(DB::table('submenu')->where('id', $subid)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Change stastus successfully']);
        else
            $message = new MessageBag(['error' => 'Change stastus error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id = null, $subid = null)
    {
        if(DB::table('submenu')->where('id', $subid)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Change stastus successfully']);
        else
            $message = new MessageBag(['error' => 'Change stastus error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function delete($id = null, $subid = null)
    {
        if(DB::table('submenu')->where('id', $subid)->delete())
            $message = new MessageBag(['success' => 'Delete submenu successfully']);
        else
            $message = new MessageBag(['error' => 'Delete submenu error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}