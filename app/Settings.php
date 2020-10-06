<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use SoftDeletes;

    protected $fillable = ['title_ar', 'title_en', 'type', 'name', 'value', 'image'];
}
