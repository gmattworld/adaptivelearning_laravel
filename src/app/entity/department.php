<?php

namespace App\entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class department extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'code', 'school_id', 'is_active'
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

    public function school()
    {
        return $this->belongsTo('App\entity\school');
    }

    public function level()
    {
        return $this->hasMany('App\entity\level');
    }
}
