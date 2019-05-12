<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    public $table = "submenu";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','position','menu_id'
    ];
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
