<?php

namespace App;

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
        return $this->belongsToMany(members::class);
    }
    public function song_artists()
    {
        return $this->belongsToMany(song_singers::class);
    }
}
