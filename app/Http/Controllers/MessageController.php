<?php

namespace App\Http\Controllers;

use App\message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\MessageBag;

class MessageController extends Controller
{
    public function index()
    {
        $name = 'message';
        $message = DB::table('message')->get();
        return view('admin.message.index',['message' => $message,'name' => $name]);
    }
    public function add(Request $request)
    {
        if($request::post() != null)
        {
            if(DB::table('message')->insert(['name' => $request::post()['name'],'email' => $request::post()['email'],'content' => $request::post()['content']]))
                $message = new MessageBag(['successSent' => 'Message sent successfully']);
                
            else
                $message = new MessageBag(['failSent' => 'Message sent failed']);
            return redirect()->back()->withInput()->withErrors($message);
        }
        return redirect()->back();
    }
    public function view($id = null)
    {
        $name = 'message';
        $message = DB::table('message')->where('id', $id)->get();
        return view('admin.message.view',['message' => $message,'name' => $name]);
    }
    public function deactivated($id)
    {
        if(DB::table('message')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['successlogin' => 'Logged in successfully']);
        else
            $message = new MessageBag(['errorlogin' => 'Email or password is incorrect']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('message')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Logged in successfully']);
        else
            $message = new MessageBag(['error' => 'Email or password is incorrect']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}