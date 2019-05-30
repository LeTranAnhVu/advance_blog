<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $hidden = ['pivot'];
    //
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'tags_posts');
    }
}
