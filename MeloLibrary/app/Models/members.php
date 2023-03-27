<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $table = 'artist_band';
    use HasFactory;
    protected $fillable = ['band_id', 'artist_id'];
}
