<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    //adding a accessor
    public function getTitleAttribute($title) {
        return ucfirst($title);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
