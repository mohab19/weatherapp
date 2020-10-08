<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use SoftDeletes;

    protected $fillable = ['radar_id', 'name_ar', 'name_en', 'basic_url', 'precipitation'];

    public function Radar()
    {
        return $this->belongsTo('App\Radar');
    }

}
