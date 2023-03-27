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
        echo 'test';
        $song = array();
        $id_user = Auth::user()->id;
        $existing_like = playlist::where([
            'user_id' => $id_user
        ])->get();
        if($existing_like){
            foreach($existing_like as $test){
                $id =  $test->song_id;
                $artist = song::find($id);
                array_push($song,$artist);
            }
            return view('biblio', compact('song'));
        }
        else return redirect('home');
    }
    public function store(String $id)
{
    $id_song = $id;
    $id_user = Auth::user()->id;
    $existing_playlist = playlist::where([
        'song_id' => $id_song,
        'user_id' => $id_user
    ])->first();

    if ($existing_playlist) {
        playlist::where([
            'song_id' => $id_song,
            'user_id' => $id_user
        ])->delete();
    } else {
        playlist::create([
            'song_id' => $id_song,
            'user_id' => $id_user
        ]);
    }

    return redirect(route('song', $id));
}
public function remove(string $id){
    $id_song = $id;
    $id_user = Auth::user()->id;
    playlist::where([
        'song_id' => $id_song,
        'user_id' => $id_user
    ])->delete();
    return redirect('/Biblio');
}
}