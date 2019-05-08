<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index($name = null)
    {
        return view('admin.index',['name' => $name]);
    }
    public function list($name)
    {
        $data = DB::table($name)->get();
        return view('admin.list', ['data' => $data,'name' => $name]);
    }
    public function add($name = null,$action = null)
    {
        $columns = DB::connection()->getSchemaBuilder()->getColumnListing($name);
        return view('admin.form', ['name' => $name,'action' => $action,'columns' => $columns]);
    }
    public function edit($name = null ,$action = null,$id = null)
    {
        $data = DB::table($name)->get();
        return view('admin.form', ['data' => $data,'name' => $name,'action' => $action,'id' => $id]);
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