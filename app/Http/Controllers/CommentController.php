<?php

namespace App\Http\Controllers;

use App\comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\MessageBag;


class CommentController extends Controller
{
    public function index()
    {
        $name = 'comment';
        $comment = DB::table('comment')
            ->join('post', 'comment.post_id', '=', 'post.id')
            ->select('comment.*', 'post.name as postname')
            ->get();
        return view('admin.comment.index',['comment' => $comment,'name' => $name]);
    }
    public function add($id = null,Request $request)
    {
        if($request::post() != null)
        {
            if(DB::table('comment')->insert(['name' => $request::post()['name'],'email' => $request::post()['email'],'content' => $request::post()['content'],'post_id' => $id]))
                $message = new MessageBag(['successSent' => 'Message sent successfully']);
                
            else
                $message = new MessageBag(['failSent' => 'Message sent failed']);
            return redirect()->back()->withInput()->withErrors($message);
        }
        return redirect()->back();
    }
    public function view()
    {
        $name = 'comment';
        $comment = DB::table('comment')
            ->join('post', 'comment.post_id', '=', 'post.id')
            ->select('comment.*', 'post.name as postname')
            ->get();
        return view('admin.comment.view',['comment' => $comment,'name' => $name]);
    }
    public function deactivated($id)
    {
        if(DB::table('comment')->where('id', $id)->update(['status' => 0]))
            $message = new MessageBag(['success' => 'Deactivated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function activated($id)
    {
        if(DB::table('comment')->where('id', $id)->update(['status' => 1]))
            $message = new MessageBag(['success' => 'Activated success']);
        else
            $message = new MessageBag(['error' => 'Deactivated error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
    public function denied($id)
    {
        if(DB::table('comment')->where('id', $id)->update(['status' => 2]))
            $message = new MessageBag(['success' => 'Denied success']);
        else
            $message = new MessageBag(['error' => 'Denied error']);
        return redirect()->back()->withInput()->withErrors($message);
    }
}