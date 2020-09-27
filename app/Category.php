<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'basic_url', 'url_call', 'time_format', 'time_interval', 'time_limits'];

    public function Types()
    {
        return $this->hasMany('App\Type');
    }

}
