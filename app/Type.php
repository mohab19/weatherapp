<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'name_ar', 'name_en', 'basic_url'];

    public function Radar()
    {
        return $this->belongsTo('App\Radar');
    }

}
