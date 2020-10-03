<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Radar extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'basic_url', 'url_call', 'time_format', 'sprint_digits', 'time_interval', 'time_limits', 'image'];

    public function Types()
    {
        return $this->hasMany('App\Type');
    }

}
