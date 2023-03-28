<?php

namespace App\Http\Controllers;

use App\Models\likes;
use App\Models\song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class likescontroller extends Controller
{
    public function index()
    {
        
    }
    public function store(String $id)
   {
    $id_song = $id;
    $id_user = Auth::user()->id;
    $existing_like = likes::where([
        'song_id' => $id_song,
        'user_id' => $id_user
    ])->first();

    if ($existing_like) {
        // User already liked the song, so delete the like
        likes::where([
            'song_id' => $id_song,
            'user_id' => $id_user
        ])->delete();
    } else {
        // User has not liked the song, so add the like
        likes::create([
            'song_id' => $id_song,
            'user_id' => $id_user
        ]);
    }

    return redirect(route('song', $id));
  }
}
