<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // What can be filled in 
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'content',
        'premium'

    ];

    // eloquent relationship refrence 
    public function author() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getExcerpt() {
        return str_limit($this->content, 25);
    }
}
