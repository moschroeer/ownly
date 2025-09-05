<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // fetch articles from DB
        $items = \App\Models\Item::all();

        //dd($articles); // to quickly analyse what you loaded

        // send articles to the view
        // return response
        return view('item.index', compact('items'));
    }
}
