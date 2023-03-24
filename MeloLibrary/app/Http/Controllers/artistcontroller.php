<?php

namespace App\Http\Controllers;

use App\artist;
use App\country;
use Illuminate\Http\Request;

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
        return view('admin.artist.artist', compact('artists'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');
        $artist=artist::find($id);
        $artist->delete();
        return redirect('/artist/')->with('success', 'Artist has been deleted successfully!');
    }
}
