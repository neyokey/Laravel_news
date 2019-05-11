<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


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
    public function add($name = null,$action = null,Request $request)
    {
        if(Request::post() != null)
        {
            $query_key = '';
            $query_value = '';
            foreach (Request::post() as $key => $value) {
                if($key == '_token' || $key == '_method')
                    continue;
                $query_key .= "'".$key."',";
                $query_value .= "'".$value."',";
            }
            //dump($query_key); die;
            DB::table($name)->insert(
                [$query_key => $query_value ]
            );
            return redirect()->back();
        }
        $columns = DB::connection()->getSchemaBuilder()->getColumnListing($name);
        $type = '';
        if($name == 'user' || $name = 'post')
            $type = DB::table($name.'type')->get();
        return view('admin.form', ['name' => $name,'action' => $action,'columns' => $columns,'type' => $type]);
    }
    public function edit($name = null ,$action = null,$id = null)
    {
        $data = DB::table($name)->get();
        $columns = DB::connection()->getSchemaBuilder()->getColumnListing($name);
        $type = '';
        if($name == 'user' || $name = 'post')
            $type = DB::table($name.'type')->get();
        return view('admin.form', ['data' => $data,'name' => $name,'action' => $action,'id' => $id,'type' => $type]);
    }
}