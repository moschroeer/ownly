<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = \App\Models\User::all();
        return view('user.index', compact('users'));
    }
    public function show($id)
    {
        $users = \App\Models\User::find($id);
        return view('user.show', compact('users'));
    }
}
