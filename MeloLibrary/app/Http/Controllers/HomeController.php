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
use App\artist;
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
        $artists = array();
        $bands = array();
        $categories = array();
        $song = song::find($id);
        $singers = singers::where('song_id',$song->id)->get();
        $band = bands::where('song_id',$song->id)->get();
        $categorie = categories::where('song_id',$song->id)->get();
        foreach($singers as $member){
            $id =  $member->id_artist;
            $artist = artist::find($id);
            array_push($artists,$artist);
        }
        foreach($band as $member){
            $id = $member->id_band;
            $artist = band::find($id);
            array_push($bands,$artist);
        }
        foreach($categorie as $member){
            $id = $member->id_cat;
            $artist = categorie::find($id);
            array_push($categories,$artist);
        }
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
        return view('detail', compact('song','artists','bands','categories','like','count_like'));
    }
}
