<?php

namespace App\Http\Controllers;

use App\contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\MessageBag;

class ContactController extends Controller
{
	public function index()
	{
 		$name = 'contact';
 		$contact = DB::table('contact')->get();
        return view('admin.contact.index',['contact' => $contact,'name' => $name]);
    }
 
    public function edit($id = null,Request $request)
    {
    	$name = 'contact';
    	if($request::post() != null)
    	{
            if(DB::table('contact')
                ->where('id', $id)
                ->update(['brand_name' => $request::post()['brand_name'],'address' => $request::post()['address'],'phone' => $request::post()['phone'],'email' => $request::post()['email'],'link_fb' => $request::post()['link_fb'],'link_ins' => $request::post()['link_ins'],'link_yt' => $request::post()['link_yt']]))
                $message = new MessageBag(['success' => 'Edit contact success']);
            else
                $message = new MessageBag(['error' => 'Edit contact error']);
            return redirect()->action('ContactController@index')->withInput()->withErrors($message);
    	}
    	$contact = DB::table('contact')->where('id', $id)->get();
        return view('admin.contact.edit',['contact' => $contact,'name' => $name]);
    }
}