<?php

namespace App\Http\Controllers;

use App\comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


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
        DB::table('comment')
            ->where('id', $id)
            ->update(['status' => 0]);
        return redirect()->back();
    }
    public function activated($id)
    {
        DB::table('comment')
            ->where('id', $id)
            ->update(['status' => 1]);
        return redirect()->back();
    }
}