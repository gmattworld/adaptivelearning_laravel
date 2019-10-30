<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Spatie\Enum\HasEnums;
use Illuminate\Database\Eloquent\Model;
use CourtRoomStatusEnum;

class CourtRoom extends Model
{
    use Notifiable;
    /**
     * composer require spatie/laravel-enum
     */
    //use HasEnums;

    /**
     * Manage enums
     *
     */
    // protected $enums = [
    //     'status' => CourtRoomStatusEnum::class,
    // ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'court_id', 'seat_count', 'status', 'location', 'is_active'
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

    public function court()
    {
        return $this->belongsTo('App\Court');
    }
}
