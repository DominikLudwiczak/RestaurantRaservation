<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stoliki extends Model
{
    protected $fillable = array('table_id', 'persons');

    public function stolik()
    {
        return $this->hasMany('App\rezerwacje', 'table_ID');
    }
}
