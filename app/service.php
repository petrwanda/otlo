<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class service extends Model
{
    //
     use SoftDeletes; 
    protected $fillable = ['name','office_id', 'status'];
}
