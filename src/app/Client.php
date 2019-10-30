<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'lastname', 'othernames', 'phone', 'address', 'is_logged_out', 'is_active', 'user_type_id', 'last_login', 'username', 'email', 'email_verified_at', 'password', 'dp_image',
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

    // public function user_type()
    // {
    //     return $this->belongsTo('App\UserType');
    // }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
