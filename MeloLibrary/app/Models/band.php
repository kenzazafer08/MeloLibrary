<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class band extends Model
{
    use HasFactory;
    protected $table = 'band'; 
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'image'];
    public function bandMembers()
    {
        return $this->hasMany(band_members::class);
    }
}
