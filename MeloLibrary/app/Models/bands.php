<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bands extends Model
{
    use HasFactory;
    protected $table = 'band_song'; 
    protected $fillable = ['band_id', 'song_id'];

    
}
