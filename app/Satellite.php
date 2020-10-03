<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Satellite extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'frame_url'];

}
