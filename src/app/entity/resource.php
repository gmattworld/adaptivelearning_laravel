<?php

namespace App\entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class resource extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'code', 'is_active', 'subject_id', 'pdf_path', 'audio_path', 'video_path'
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

    public function subject()
    {
        return $this->belongsTo('App\entity\subject');
    }
}
