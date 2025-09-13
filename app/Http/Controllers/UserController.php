<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // fetch articles from DB
        $users = \App\Models\User::all();

        //dd($articles); // to quickly analyse what you loaded

        // send articles to the view
        // return response
        return view('user.index', compact('users'));
    }
    public function show($id)
    {
        // fetch the one article that is requested
        $users = \App\Models\User::find($id);

        // send article to its view
        // return response
        return view('user.show', compact('users'));
    }
}
