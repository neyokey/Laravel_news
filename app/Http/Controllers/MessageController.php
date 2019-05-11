<?php

namespace App\Http\Controllers;

use App\message;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class MessageController extends Controller
{
    public function index()
    {
        $name = 'message';
        $message = DB::table('message')->get();
        return view('admin.message.index',['message' => $message,'name' => $name]);
    }
    public function view($id = null)
    {
        $name = 'message';
        $message = DB::table('message')->where('id', $id)->get();
        return view('admin.message.view',['message' => $message,'name' => $name]);
    }
    public function deactivated($id)
    {
        DB::table('message')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('message')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}