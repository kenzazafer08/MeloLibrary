<?php

namespace App\Http\Controllers;

use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentcontroller extends Controller
{
    public function store(Request $request,String $id)
    {
        $id_song = $id;
        $id_user = Auth::user()->id;
        $existing_playlist = comments::create([
            'song_id' => $id_song,
            'user_id' => $id_user,
            'body' => $request->input('comment')
        ]);
        
        return redirect(route('song', $id));
    }
    public function remove(string $id){
        $song = comments::where([
            'id' => $id,
        ])->first();
        $id_song = $song->song_id;
        comments::where([
            'id' => $id,
        ])->delete();
        return redirect(route('song',$id_song));
    }
}
