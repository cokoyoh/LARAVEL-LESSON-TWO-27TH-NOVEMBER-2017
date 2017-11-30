<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes; //global scope
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //many to many relationship defined here
    public function roles() {
        return $this->belongsToMany(Role::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
    
    //adding  name mutator
    public function setNameAttribute($name) {
        $this->attributes['name'] = ucfirst($name);
    }
}
