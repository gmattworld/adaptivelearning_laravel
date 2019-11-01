<?php

namespace App\entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class school  extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'code', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    // public function post()
    // {
    //     return $this->hasMany('App\Post');
    // }

    // public function cases()
    // {
    //     return $this->hasMany('App\Cases');
    // }
}
