<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class catcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();
        return view('admin.cat.cat', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artist = categorie::create([
        'name'       => $request->input('name'),
        'discription'   => $request->input('discription'),
        'type'   => $request->input('type'),
        ]);
        return redirect('/cat/')->with('success', 'Categorie/Keyword has been created successfully!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat = categorie::find($id);
        return view('admin.cat.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cat = categorie::find($id);

        $cat->name = $request->input('name');
        $cat->discription = $request->input('discription');
        $cat->type = $request->input('type');

        $cat->save();

    return redirect('/cat')->with('success', 'Categorie/Keyword updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = categorie::find($id);
        $cat->delete();
        return redirect('/cat')->with('success', 'Categorie/Keyword deleted successfully.');
    }
}
