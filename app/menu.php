<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $fillable = array('menu_kat', 'danie', 'cena');
}
