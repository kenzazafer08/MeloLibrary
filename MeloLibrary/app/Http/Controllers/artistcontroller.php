<?php

namespace App\Http\Controllers;

use App\artist;
use App\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\singers;
use App\Models\song;

class artistcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = artist::all();
        if(Auth::user()->role == '1'){
            return view('admin.artist.artist', compact('artists'));
        }
        else{
            return view('artist', compact('artists'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = country::all();
        return view('admin.artist.create', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        $artist = artist::create([
        'name'       => $request->input('name'),
        'country'   => $request->input('country'),
        'birthday'   => $request->input('birthdate'),
        'image'       => $file->getClientOriginalName(),
        ]);
        return redirect('/artist/')->with('success', 'Artist has been created successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $song = array();
        $singers = singers::where('id_artist',$id)->get();
        foreach($singers as $member){
            $id =  $member->song_id;
            $artist = song::find($id);
            array_push($song,$artist);
        }
        return view('home', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = country::all();
        $artist = artist::find($id);
        return view('admin.artist.edit', compact('artist','country'));
    }

    public function destroy($id)
    {
        $artist = artist::find($id);
        $artist->delete();
        return redirect('/artist')->with('success', 'Artist deleted successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $artist = artist::find($id);

    $artist->name = $request->input('name');
    $artist->country = $request->input('country');
    $artist->birthday = $request->input('birthdate');

    // Check if a new image was uploaded
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $file->move(public_path('uploads'), $file->getClientOriginalName());
        $artist->image = $file->getClientOriginalName();
    }

    $artist->save();

    return redirect('/artist')->with('success', 'Artist updated successfully.');
    }

}
