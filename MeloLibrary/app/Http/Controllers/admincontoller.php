<?php

namespace App\Http\Controllers;

use App\artist;
use App\Models\categorie;
use Illuminate\Http\Request;
use App\Models\User;
class admincontoller extends Controller
{
    public function index()
    {
        $users = User::where('role', 0)->count();
        $artists = artist::count();
        $categorie = categorie::count();
        return view('admin.admin', compact('users','artists','categorie'));
    }
}
