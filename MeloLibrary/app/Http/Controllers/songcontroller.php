<?php

namespace App\Http\Controllers;

use App\Models\artist;
use App\Models\band;
use App\Models\categorie;
use App\Models\song;
use App\Models\bands;
use App\Models\categories;
use App\Models\singers;
use App\Models\likes;
use Illuminate\Http\Request;

class songcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $song = song::all();
        return view('admin.song.song', compact('song'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categorie::all();
        $artists = artist::all();
        $bands = band::all();
        return view('admin.song.create', compact('categories','artists','bands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $audio = $request->file('audio');
        $image->move(public_path('uploads'),$image->getClientOriginalName());
        $audio->move(public_path('uploads'),$audio->getClientOriginalName());
        $song = song::create([
        'Titre'  => $request->input('title'),
        'image'   => $image->getClientOriginalName(),
        'audio'   => $audio->getClientOriginalName(),
        'date'  => $request->input('date'),
        'lyrics'  => $request->input('lyrics'),
        ]);
        $artists = $request->input('artist');
        if($artists){
            foreach($artists as $artist){
                $songSinger = singers::create( [
                    'song_id' => $song->id,
                    'artist_id' => $artist,
            ]);
        }}
        $bands = $request->input('band');
        if($bands){
            foreach($bands as $band){
                $songBand = bands::create( [
                    'song_id' => $song->id,
                    'band_id' => $band,
            ]);
        }
      }
        $categories = $request->input('categorie');
            foreach($categories as $categorie){
                $songcat = categories::create( [
                    'song_id' => $song->id,
                    'categorie_id' => $categorie,
                ]);
        }
        return redirect('/song/')->with('success', 'Song has been created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $song = song::find($id);
        $comments = $song->comments;
        $artists = $song->singers;
        $bands = $song->band_song;
        $categories = $song->categories;
        $count_likes = likes::where([
            'song_id' => $id
        ])->count();
        $singers= artist::all();
        $groups= band::all();
        $keywords= categorie::all();
        $comments = $song->comments;
        return view('admin.song.detail', compact('comments','count_likes','song','artists','bands','categories','singers','groups','keywords'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $song = song::find($id);
        return view('admin.song.edit', compact('song'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $song = song::find($id);

        $song->Titre = $request->input('title');
        $song->date = $request->input('date');
        $song->lyrics = $request->input('lyrics');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path('uploads'), $file->getClientOriginalName());
            $song->Image = $file->getClientOriginalName();
        }
        if ($request->hasFile('audio')) {
            $file = $request->file('audio');
            $file->move(public_path('uploads'), $file->getClientOriginalName());
            $song->audio = $file->getClientOriginalName();
        }
        $song->save();
    
        return redirect('/song')->with('success', 'song updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = song::findOrFail($id);
            $song->categories()->detach();
            $song->singers()->detach();
            $song->band()->detach();
            $song->delete();
            return redirect('/song')->with('success', 'Song has been deleted successfully!');
    }
    public function remove_artist(Request $request, string $id)
        {
            $song = song::findOrFail($id);
            $id_artist = $request->input('artist');
            $members = singers::where('song_id', $song->id)->where('artist_id', $id_artist)->delete();
            return redirect(route('song.show',$id))->with('success', 'song has been updated successfully!');
        }
    public function remove_band(Request $request, string $id)
        {
            $song = song::findOrFail($id);
            $band = $request->input('band');
            $members = bands::where('song_id', $song->id)->where('band_id', $band)->delete();
            return redirect('/song/')->with('success', 'song has been updated successfully!');
        }
    public function remove_cat(Request $request, string $id)
        {
            $song = song::findOrFail($id);
            $categorie = $request->input('categorie');
            $members = categories::where('song_id', $song->id)->where('categorie_id', $categorie)->delete();
            return redirect(route('song.show',$id))->with('success', 'song has been updated successfully!');
        }
        public function addartist(Request $request, string $id){
            $song = song::find($id);
            $artists = $request->input('artist');
            foreach($artists as $artist){
                $bandMember = singers::create( [
                    'song_id' => $song->id,
                    'artist_id' => $artist,
            ]);
            }
            return redirect(route('song.show',$id))->with('success', 'Song has been updated successfully!');
        }
        public function addband(Request $request, string $id){
            $song = song::find($id);
            $bands = $request->input('band');
            foreach($bands as $artist){
                $bandMember = bands::create( [
                    'song_id' => $song->id,
                    'band_id' => $artist,
            ]);
            }
            return redirect(route('song.show',$id))->with('success', 'Song has been updated successfully!');
        }
        public function addcat(Request $request, string $id){
            $song = song::find($id);
            $categories = $request->input('categorie');
            foreach($categories as $artist){
                $bandMember = categories::create( [
                    'song_id' => $song->id,
                    'categorie_id' => $artist,
            ]);
            }
            return redirect(route('song.show',$id))->with('success', 'Song has been updated successfully!');
        }
}
