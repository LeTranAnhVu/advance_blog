<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $hidden = ['pivot'];

    public function author(){
        return $this->belongsTo('App\User', 'author_id');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag','tags_posts');
    }
    public function categories(){
        return $this->belongsToMany('App\Category','categories_posts');
    }
}
