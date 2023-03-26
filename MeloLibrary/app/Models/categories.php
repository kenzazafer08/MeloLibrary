<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'categories_song'; 
    protected $fillable = ['id_cat', 'song_id'];
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }

    public function song()
    {
        return $this->belongsTo(song::class);
    }
}
