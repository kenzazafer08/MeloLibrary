<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\categories;
use App\Models\bands;
use App\Models\singers;
use App\Models\categorie;
use App\Models\likes;
use App\Models\band;
use App\Models\artist;
use App\Models\comments;
use App\Models\playlist;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $song = song::all();
        return view('home', compact('song'));
    }
    public function show(string $id)
    {
        $id_user = Auth::user()->id;
        $song = song::find($id);
        $existing_like = likes::where([
            'song_id' => $id,
            'user_id' => $id_user
        ])->first();
        $count_like = likes::where([
            'song_id' => $id
        ])->count();
        if ($existing_like) {
            // User already liked the song, so delete the like
            $like = 1;
        } else {
            // User has not liked the song, so add the like
            $like = 0;
        }
        $existing_playlist = playlist::where([
            'song_id' => $id,
            'user_id' => $id_user
        ])->first();
    
        if ($existing_playlist) {
           $playlist = 1;
        } else {
            $playlist = 0;
        }
        $comments = $song->comments;
        $artists = $song->singers;
        $bands = $song->band;
        $categories = $song->categories;
        return view('detail', compact('comments','playlist','song','artists','bands','categories','like','count_like'));
    }
}
