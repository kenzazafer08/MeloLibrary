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
        $user =  Auth::user();
        $song = song::find($id);
        if($song){
            $existing_like = $user->likes;
            $count_like = $song->likes->count();
            $like = 0;
            if(isset($existing_like)){
                foreach($existing_like as $l){
                    if ($l->song->id == $song->id) {
                        $like = 1;
                    } 
                }
            }
            $existing_playlist = $user->playlist;
            $playlist = 0;
            if(isset($existing_playlist)){
                foreach($existing_playlist as $l){
                    if ($l->song->id == $song->id) {
                        $playlist = 1;
                    }
            }
             
            }
            $comments = $song->comments;
            $artists = $song->singers;
            $bands = $song->band;
            $categories = $song->categories;
            return view('detail', compact('comments','playlist','song','artists','bands','categories','like','count_like'));
        }
        else redirect('home');
    }
}
