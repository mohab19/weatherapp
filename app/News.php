<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'title_ar', 'title_en', 'writer', 'description', 'image'];

    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
}
