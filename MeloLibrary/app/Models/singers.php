<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singers extends Model
{
    use HasFactory;
    protected $table = 'singers_song'; 
    protected $fillable = ['id_artist', 'song_id'];
    public function song()
    {
        return $this->belongsTo(song::class);
    }

    public function artist()
    {
        return $this->belongsTo(artist::class);
    }
}
