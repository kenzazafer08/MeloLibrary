<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bands extends Model
{
    use HasFactory;
    protected $table = 'bands_song'; 
    protected $fillable = ['id_band', 'song_id'];
    public function band()
    {
        return $this->belongsTo(band::class);
    }

    public function song()
    {
        return $this->belongsTo(song::class);
    }
}
