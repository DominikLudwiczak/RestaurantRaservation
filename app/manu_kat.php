<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manu_kat extends Model
{
    protected $fillable = array('kategoria');

    public function kat()
    {
        return $this->hasMany('App\menu', 'menu_kat_id');
    }
}
