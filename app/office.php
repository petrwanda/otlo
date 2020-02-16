<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class office extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','location', 'open_time','close_time','status','header'];
}
