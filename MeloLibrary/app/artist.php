<?php

namespace App;

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
}
