<?php

namespace App\entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class subject extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'code', 'course_id', 'is_active'
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

    public function post()
    {
        return $this->hasMany('App\entity\Post');
    }

    public function course()
    {
        return $this->belongsTo('App\entity\course');
    }
}
