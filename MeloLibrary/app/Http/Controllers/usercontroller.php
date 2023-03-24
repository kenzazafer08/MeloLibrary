<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class usercontroller extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.user', compact('users'));
    }
}
