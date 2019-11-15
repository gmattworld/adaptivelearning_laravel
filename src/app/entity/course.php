<?php

namespace App\entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class course extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'code', 'level_id', 'is_active'
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

    public function level()
    {
        return $this->belongsTo('App\entity\level');
    }

    public function subject()
    {
        return $this->hasMany('App\entity\subject');
    }
}
