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

class HomeController extends Controller
{
    public function __construct() {
        $contact = DB::table('contact')->get();
        $menu = DB::table('menu')->get();
        $submenu = DB::table('submenu')->orderBy('position')->get();
        $data = array(
            'contact' => $contact,
            'menu' => $menu,
            'submenu' => $submenu,
        );
        View::share('data', $data);
    }

    public function index()
    {
        $name = 'home';
        return view('home.index',['name' => $name]);
    }
    public function login(Request $request )
    {  
        //dump($request::post()); die;
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
                    return redirect()->action('HomeController@index');
                } else {
                    $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                    return redirect()->back()->withInput()->withErrors($errors);
                }
            }
        }
        $name = 'login';
        return view('home.login',['name' => $name]);
    }
    
    public function contact()
    {
        return view('home.contact');
    }
    public function typography()
    {
        return view('home.typography');
    }
}