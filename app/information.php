<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class information extends Model
{
    //
    use SoftDeletes;
     protected $fillable = ['information','service_id'];
}
