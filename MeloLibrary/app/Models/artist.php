<?php

namespace App\Models;

use App\Models\song_singers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artist extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'country', 'birthday', 'image'];
    use SoftDeletes;
    public function members()
    {
        return $this->belongsToMany(band::class);
    }
    public function song()
    {
        return $this->belongsToMany(song::class);
    }
}
