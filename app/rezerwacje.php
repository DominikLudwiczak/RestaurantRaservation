<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rezerwacje extends Model
{
    protected $fillable = ['user_ID', 'table_ID', 'persons'];
}