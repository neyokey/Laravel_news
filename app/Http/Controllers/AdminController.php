<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function list($name)
    {
        $data = DB::table($name)->get();
        return view('admin.list', ['data' => $data,'name' => $name]);
    }
    public function add($name)
    {
        $data = DB::table($name)->get();
        return view('admin.form');
    }
    public function edit($name,$id)
    {
        $data = DB::table($name)->get();
        return view('admin.form');
    }
    public function deactivated($name,$id)
    {
        DB::table($name)
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($name,$id)
    {
        DB::table($name)
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}