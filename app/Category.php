<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $hidden = ['pivot'];
    public function posts(){
        return $this->belongsToMany('App\Post','categories_posts');
    }
}
