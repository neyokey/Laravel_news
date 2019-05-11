<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = "post";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'content', 'posttype_id','user_id',
    ];
}
