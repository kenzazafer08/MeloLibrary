<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $table = 'band_members';
    use HasFactory;
    protected $fillable = ['band_id', 'artist_id'];


    public function band()
    {
        return $this->belongsTo(band::class);
    }

    public function artist()
    {
        return $this->belongsTo(artist::class);
    }
}
