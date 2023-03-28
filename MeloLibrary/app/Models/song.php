<?php

namespace App\Models;


use App\Models\artist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;
    protected $table = 'songs'; 
    protected $primaryKey = 'id';
    protected $fillable = ['Titre', 'image','audio','lyrics','date'];
    public function categories()
    {
        return $this->belongsToMany(categorie::class);
    }
    public function singers()
    {
        return $this->belongsToMany(artist::class);
    }
    public function band()
    {
        return $this->belongsToMany(band::class);
    }
    public function likes()
    {
        return $this->hasMany(likes::class);
    }
    public function playlists()
    {
        return $this->hasMany(playlist::class);
    }
    public function comments()
    {
        return $this->hasMany(comments::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($song) {
            $song->likes()->delete();
            $song->comments()->delete();
            $song->playlists()->delete();
        });
    }
}
