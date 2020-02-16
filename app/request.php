<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class request extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['name','description', 'service_id'];
}
