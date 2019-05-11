<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usertype extends Model
{
    public $table = "usertype";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];
    public function user(){
        return $this->hasMany('App\User', 'id');
    }
}
