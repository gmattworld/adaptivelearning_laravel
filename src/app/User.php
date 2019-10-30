<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'othernames', 'phone', 'address', 'is_logged_out', 'user_type_id', 'last_login', 'username', 'email', 'email_verified_at', 'password', 'dp_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login' => 'datetime',
    ];

    public function user_type()
    {
        return $this->belongsTo('App\UserType');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function case()
    {
        return $this->hasMany('App\Cases', 'user_id', 'id');
    }

    public function archive()
    {
        return $this->hasMany('App\Archive');
    }

    public function lawyer()
    {
        return $this->hasOne('App\Lawyer');
    }

    public function client()
    {
        return $this->hasOne('App\Client');
    }
}
