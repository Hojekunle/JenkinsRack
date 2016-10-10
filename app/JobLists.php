<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobLists extends Model
{
    protected $fillable = array('id', 'name', 'desc','created_at','updated_at');
}
