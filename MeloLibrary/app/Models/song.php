<?php

namespace App\Models;

use App\artist;
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
        return $this->belongsToMany(categories::class);
    }
    public function singers()
    {
        return $this->belongsToMany(singers::class);
    }
    public function bands()
    {
        return $this->belongsToMany(bands::class);
    }
    public function likes()
    {
        return $this->hasMany(likes::class);
    }
}
