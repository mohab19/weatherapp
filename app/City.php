<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['id', 'name_ar', 'name_en', 'city_code', 'country_iso'];
}
