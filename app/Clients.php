<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $fillable = array('id', 'name', 'email','created_at','updated_at');
}
