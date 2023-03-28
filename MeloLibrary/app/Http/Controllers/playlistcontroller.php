<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class playlistcontroller extends Controller
{
    public function index()
    {
        $id_user = Auth::user()->id;
        $user = Auth::user();
        $song = $user->playlist;
        $i = 0;
        if($song){
            foreach($song  as $like){
                if($like->song){
                   $i++;
                }
            } 
        }
        if($i > 0){
            return view('biblio', compact('song'));
        }
        else return redirect('home');
    }
    public function store(String $id)
{
    $id_song = $id;
    $id_user = Auth::user()->id;
    $existing_like = playlist::where([
        'song_id' => $id_song,
        'user_id' => $id_user
    ])->first();

    if ($existing_like) {
        // User already liked the song, so delete the like
        playlist::where([
            'song_id' => $id_song,
            'user_id' => $id_user
        ])->delete();
    } else {
        // User has not liked the song, so add the like
        playlist::create([
            'song_id' => $id_song,
            'user_id' => $id_user
        ]);
    }
    return redirect(route('song', $id));
}
public function remove(string $id){
    $id_song = $id;
    $user = Auth::user();
    $existing_playlist = $user->playlist;
    foreach($existing_playlist as $l){
        if ($l->song->id == $id_song) {
            $l->song->delete();
        }
    }
    return redirect('/Biblio');
}
}