<?php

namespace App\Http\Controllers;

use App\Models\artist;
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
        
        $categorie = categorie::find($id);
        $song = $categorie->song_categories;
        return view('home', compact('song'));
    }
}
