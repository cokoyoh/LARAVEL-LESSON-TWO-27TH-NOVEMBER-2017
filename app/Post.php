<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes; //global scope
    protected $fillable = ['title', 'body', 'user_id'];

    //adding a accessor
    public function getTitleAttribute($title) {
        return ucfirst($title);
    }

    //One to many relationship defined here
    public function user() {
        return $this->belongsTo(User::class);
    }
}
