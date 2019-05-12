<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $table = "menu";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','position'
    ];
    public function Submenu()
    {
        return $this->hasMany('App\Submenu');
    }
}
