<?php

namespace App\Http\Controllers;

use App\artist;
use App\Models\categorie;
use App\Models\categories;
use App\Models\song;
use Illuminate\Http\Request;

class searchcontroller extends Controller
{
    public function index()
    {
        $categorie = categorie::all();
        $artists = artist::all();
        return view('search', compact('categorie','artists'));
    }
    // * @param  \Illuminate\Http\Request  $request
    // * @return \Illuminate\Http\Response
    public function read(Request $request)
    {
        $search = $request->input('search');
        $song = song::where('Titre','like', $search)->get();
        return view('home', compact('song'));
    }
    public function show(string $id)
    {
        $song = array();
        $categorie = categories::where('id_cat',$id)->get();
        foreach($categorie as $member){
            $id = $member->song_id;
            $artist = song::find($id);
            array_push($song,$artist);
        }
        return view('home', compact('song'));
    }
}
