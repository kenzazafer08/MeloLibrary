<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    protected $table = 'playlist';
    use HasFactory;
    protected $fillable = ['song_id', 'user_id'];    
    public function song()
    {
        return $this->belongsTo(song::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
