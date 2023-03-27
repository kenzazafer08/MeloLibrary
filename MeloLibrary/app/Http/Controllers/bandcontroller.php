<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\band;
use App\Models\artist;
use App\Models\members;
use App\Models\bands;
use Illuminate\Support\Facades\Auth;

class bandcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $band = band::all();
        if(Auth::user()->role == '1'){
        return view('admin.band.band', compact('band'));
        }else{
            return view('band', compact('band'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = artist::all();
        return view('admin.band.create', compact('artists'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $file->move(public_path('uploads'),$file->getClientOriginalName());
        $band = band::create([
        'name'  => $request->input('name'),
        'image'   => $file->getClientOriginalName(),
        ]);
        $artists = $request->input('artist');
        foreach($artists as $artist){
            $bandMember = members::create( [
                'band_id' => $band->id,
                'artist_id' => $artist,
        ]);
        }
        return redirect('/band/')->with('success', 'Band has been created successfully!');
    }
    public function add(Request $request, string $id){
        $band = band::find($id);
        $artists = $request->input('artist');
        foreach($artists as $artist){
            $bandMember = members::create( [
                'band_id' => $band->id,
                'artist_id' => $artist,
        ]);
        }
        
        return redirect(route('band.show',$id))->with('success', 'Band has been updated successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $band = band::find($id);
        $artists = $band->members ;
        $singers= artist::all();
        if(Auth::user()->role == '1'){
        return view('admin.band.detail', compact('band','artists','singers'));
        }else{
            return view('banddetail', compact('band','artists','singers'));
        }
    }

    public function showsongs($id)
    {
        $band = band::find($id);
        $song = $band->song;
        return view('home', compact('song'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $band = band::find($id);
        return view('admin.band.edit', compact('band'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $band = band::find($id);

        $band->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('uploads'), $file->getClientOriginalName());
            $band->image = $file->getClientOriginalName();
        }
    
        $band->save();
    
        return redirect('/band')->with('success', 'Band updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
        {
            $band = band::find($id);
            $band->members()->detach();
            $band->delete();
            return redirect('/band/')->with('success', 'Band has been deleted successfully!');
        }
        public function remove(Request $request, string $id)
        {
            $band = band::findOrFail($id);
            $id_artist = $request->input('artist');
            $members = members::where('band_id', $band->id)->where('artist_id', $id_artist)->delete();
            return redirect(route('band.show',$id))->with('success', 'Band has been updated successfully!');
        }
        
}
