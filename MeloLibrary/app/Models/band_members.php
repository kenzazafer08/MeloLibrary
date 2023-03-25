<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class band_members extends Model
{
    use HasFactory;
    protected $fillable = ['band_id', 'artist_id', 'role'];

    public function band()
    {
        return $this->belongsTo(band::class);
    }

    public function artist()
    {
        return $this->belongsTo(artist::class);
    }
}
