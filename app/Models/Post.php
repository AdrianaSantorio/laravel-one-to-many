<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug'];

    public function category()
    {
        $this->belongsTo('App\models\Category');
    }
}
