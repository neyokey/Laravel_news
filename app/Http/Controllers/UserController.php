<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use Validator;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
	public function index()
	{
 		$name = 'user';
 		$user = DB::table('user')
            ->join('usertype', 'user.usertype_id', '=', 'usertype.id')
            ->select('user.*', 'usertype.name as typename')
            ->get();
        return view('admin.user.index',['user' => $user,'name' => $name]);
    }
    public function add(Request $request)
    {
        $name = 'user';
        if($request::post() != null)
        {
            $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
            ];
            $messages = [
                'email.email' => 'Email invalidate',
                'password.required' => 'Password is a required field',
                'password.min' => 'Password must contain at least 6 characters',
            ];
            $validator = Validator::make($request::all(), $rules, $messages);
            if ($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                $user = DB::table('user')->where('email',$request::post()['email'])->get();
                if($user->isEmpty())
                {
                    if($request::hasFile('image'))
                    {
                        $file = $request::file('image');
                        $filename = $file->getClientOriginalName();
                        $arr_ext = array('jpg', 'jpeg', 'gif','png');
                        $ext = $file->getClientOriginalExtension();
                        if(in_array($ext, $arr_ext))
                        {
                            $uploadpath = public_path().'/img/user/';
                            if ($file->move($uploadpath,$filename)) 
                            {
                                
                                $url = '/img/user/'.$filename;
                                if(DB::table('user')->insert(['name' => $request::post()['name'],'email' => $request::post()['email'],'password' => bcrypt($request::post()['password']),'usertype_id' => $request::post()['usertype'],'image' => $url])) 
                                {
                                    $message = new MessageBag(['success' => 'Edit user success']);
                                    return redirect()->action('UserController@index')->withInput()->withErrors($message);
                                }
                                $message = new MessageBag(['error' => 'Edit user error']);
                                return redirect()->action('UserController@index')->withInput()->withErrors($message);
                            }
                        }
                        else
                        {
                            $message = new MessageBag(['image' => 'Not image file']);
                            return redirect()->back()->withInput()->withErrors($message);
                        }
                    }
                    if(DB::table('user')->insert(['name' => $request::post()['name'],'email' => $request::post()['email'],'password' => bcrypt($request::post()['password']),'usertype_id' => $request::post()['usertype']])) 
                    {
                        $message = new MessageBag(['success' => 'Edit user success']);
                    } 
                    else 
                    {
                        $message = new MessageBag(['error' => 'Edit user error']);
                    }
                    return redirect()->action('UserController@index')->withInput()->withErrors($message);
                }
                else
                {
                    $message = new MessageBag(['email' => 'Duplicate Email']);
                    return redirect()->back()->withInput()->withErrors($message);
                }
            }
        }
        $usertype = DB::table('usertype')->where('status', '1')->get();
        return view('admin.user.add',['usertype' => $usertype,'name' => $name]);
    }
    public function edit($id = null,Request $request)
    {
    	$name = 'user';
    	if($request::post() != null)
    	{
            $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
            ];
            $messages = [
                'email.email' => 'Email invalidate',
                'password.required' => 'Password is a required field',
                'password.min' => 'Password must contain at least 6 characters',
            ];
            $validator = Validator::make($request::all(), $rules, $messages);
            if ($validator->fails()) 
            {
                return redirect()->back()->withErrors($validator)->withInput();
            } 
            else 
            {
                $user = DB::table('user')->where('email',$request::post()['email'])->where('id','!=',$id)->get();
                if($user->isEmpty())
                {
                    if($request::hasFile('image'))
                    {
                        $file = $request::file('image');
                        $filename = $file->getClientOriginalName();
                        $arr_ext = array('jpg', 'jpeg', 'gif','png');
                        $ext = $file->getClientOriginalExtension();
                        if(in_array($ext, $arr_ext))
                        {
                            $uploadpath = public_path().'/img/user/';
                            if ($file->move($uploadpath,$filename)) 
                            {
                                
                                $url = '/img/user/'.$filename;
                                if(DB::table('user')->where('id', $id)->update(['name' => $request::post()['name'],'email' => $request::post()['email'],'password' => bcrypt($request::post()['password']),'usertype_id' => $request::post()['usertype'],'image' => $url])) 
                                {
                                    $message = new MessageBag(['success' => 'Edit user success']);
                                    return redirect()->action('UserController@index')->withInput()->withErrors($message);
                                }
                                $message = new MessageBag(['error' => 'Edit user error']);
                                return redirect()->action('UserController@index')->withInput()->withErrors($message);
                            }
                        }
                        else
                        {
                            $message = new MessageBag(['image' => 'Not image file']);
                            return redirect()->back()->withInput()->withErrors($message);
                        }
                    }
                    if(DB::table('user')->where('id', $id)->update(['name' => $request::post()['name'],'email' => $request::post()['email'],'password' => bcrypt($request::post()['password']),'usertype_id' => $request::post()['usertype']])) 
                    {
                        $message = new MessageBag(['success' => 'Edit user success']);
                    } 
                    else 
                    {
                        $message = new MessageBag(['error' => 'Edit user error']);
                    }
                    return redirect()->action('UserController@index')->withInput()->withErrors($message);
                }
                else
                {
                    $message = new MessageBag(['email' => 'Duplicate Email']);
                    return redirect()->back()->withInput()->withErrors($message);
                }
            }
        }
    	$user = DB::table('user')->where('id', $id)->get();
        if($user->isEmpty())
        {
            return Redirect::to(url('/admin/user/'));
        }
    	$usertype = DB::table('usertype')->where('status', '1')->get();
        return view('admin.user.edit',['user' => $user,'usertype' => $usertype,'name' => $name]);
    }
    public function deactivated($id)
    {
        if(DB::table('user')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Deactivated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('user')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Activated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}