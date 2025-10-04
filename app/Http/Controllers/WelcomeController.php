<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $items=\App\Models\Item::latest()->take(4)->get();
        $users=\App\Models\User::latest()->take(4)->get();
        return view('welcome', compact('items'), compact('users'));
    }
}
