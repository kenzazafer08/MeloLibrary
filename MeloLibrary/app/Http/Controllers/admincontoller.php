<?php

namespace App\Http\Controllers;

use App\artist;
use App\Models\band;
use App\Models\categorie;
use App\Models\song;
use Illuminate\Http\Request;
use App\Models\User;
class admincontoller extends Controller
{
    public function index()
    {
        $users = User::where('role', 0)->count();
        $artists = artist::count();
        $categorie = categorie::count();
        $band = band::count();
        $song = song::count();
        return view('admin.admin', compact('users','artists','categorie','band','song'));
    }
}
