<?php

namespace App\Http\Controllers;

use App\message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\MessageBag;

class MessageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $name = 'message';
        $message = DB::table('message')->orderBy('id','desc')->paginate(7);
        return view('admin.message.index',['message' => $message,'name' => $name]);
    }
    public function view($id = null)
    {
        $name = 'message';
        DB::table('message')->where('id', $id)->update(['status' => 1]);
        $message = DB::table('message')->where('id', $id)->get();
        return view('admin.message.view',['message' => $message,'name' => $name]);
    }
    public function deactivated($id)
    {
        if(DB::table('message')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Change stastus successfully']);
        else
            $message = new MessageBag(['error' => 'Change stastus error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('message')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Change stastus successfully']);
        else
            $message = new MessageBag(['error' => 'Change stastus error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}