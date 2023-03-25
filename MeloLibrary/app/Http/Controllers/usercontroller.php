<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{
    public function index()
    {
        $users = User::where('role', 0)->get();
        return view('admin.user', compact('users'));
    }
}
