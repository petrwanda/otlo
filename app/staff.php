<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class staff extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['serial_no','name', 'phone','status','office_id']; 
}
