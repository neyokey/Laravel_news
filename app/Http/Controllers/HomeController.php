<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use View;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class HomeController extends Controller
{
    public function __construct() {
        $contact = DB::table('contact')->get();
        $menu = DB::table('menu')->where('status','1')->orderBy('position')->get();
        $submenu = DB::table('submenu')->where('status','1')->orderBy('position')->get();
        $mostview_post = DB::table('post')->where('status','1')->orderBy('view','desc')->select('id','name','view','insert_time','image')->get()->take(5);
        $data = array(
            'contact' => $contact,
            'menu' => $menu,
            'submenu' => $submenu,
            'mostview_post' => $mostview_post,
        );
        View::share('data', $data);
    }

    public function index()
    {
        $name = 'home';
        $post = DB::table('post')->where('status','1')->orderBy('id','desc')->select('id','name','view','insert_time','image')->get();
        return view('home.index',['name' => $name,'post' => $post]);
    }
    public function login(Request $request )
    {  
        if(Auth::check())
            return redirect('/');
        if($request::post() != null)
        {
            $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
            ];
            $messages = [
                'email.required' => 'Email is a required field',
                'email.email' => 'Email invalidate',
                'password.required' => 'Password is a required field',
                'password.min' => 'Password must contain at least 6 characters',
            ];
            $validator = Validator::make($request::all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $email = $request::post()['email'];
                $password = $request::post()['password'];
                if( Auth::attempt(['email' => $email, 'password' =>$password])) {
                    $message = new MessageBag(['successlogin' => 'Logged in successfully']);
                    return redirect()->action('HomeController@index')->withInput()->withErrors($message);
                } else {
                    $errors = new MessageBag(['errorlogin' => 'Email or password is incorrect']);
                    return redirect()->back()->withInput()->withErrors($errors);
                }
            }
        }
        $name = 'login';
        return view('home.login',['name' => $name]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->action('HomeController@index');
    }
    public function contact()
    {
        $breadcrumb= 'Contact';
        $name = 'contact';
        return view('home.contact',['name' => $name,'breadcrumb' => $breadcrumb]);
    }
    public function post($id = null)
    {
        $name = 'post';
        $post = DB::table('post')->where('id',$id)
            ->get();
        if($post->isEmpty())
        {
            return Redirect::to(url('/'));
        }
        $view = $post[0]->view + 1;
        DB::table('post')->where('id', $id)
                ->update(['view' => $view]);
        $post = DB::table('post')->where('post.id',$id)
            ->join('user', 'post.user_id', '=', 'user.id')
            ->select('post.*', 'user.name as username')
            ->get();
        $breadcrumb= $post[0]->name;
        $comment = DB::table('comment')->where('post_id',$id)->where('status','1')->get();
        return view('home.post',['name' => $name, 'post' => $post,'comment' => $comment,'breadcrumb' => $breadcrumb]);
    }

    public function add_comment($id = null,Request $request)
    {
        if($request::post() != null)
        {
            if(Auth::check())
            {
                if(DB::table('comment')->insert(['name' => Auth::user()->name,'email' => Auth::user()->email,'content' => $request::post()['content'],'image' => Auth::user()->image,'post_id' => $id]))
                    $message = new MessageBag(['success' => 'Comment sent successfully and waiting for moderation']);
                else
                    $message = new MessageBag(['fail' => 'Comment sent failed']);
                return redirect()->back()->withInput()->withErrors($message);
            }
            else
            {
                if(DB::table('comment')->insert(['name' => $request::post()['name'],'email' => $request::post()['email'],'content' => $request::post()['content'],'post_id' => $id]))
                    $message = new MessageBag(['success' => 'Comment sent successfully and waiting for moderation']);
                else
                    $message = new MessageBag(['fail' => 'Comment sent failed']);
                return redirect()->back()->withInput()->withErrors($message);
            }
        }
        return redirect()->back();
    }
    public function add_message(Request $request)
    {
        if($request::post() != null)
        {
            if(DB::table('message')->insert(['name' => $request::post()['name'],'email' => $request::post()['email'],'content' => $request::post()['content']]))
                $message = new MessageBag(['success' => 'Message sent successfully']);
                
            else
                $message = new MessageBag(['fail' => 'Message sent failed']);
            return redirect()->back()->withInput()->withErrors($message);
        }
        return redirect()->back();
    }
}