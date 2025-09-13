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
    public function show($id)
    {
        // fetch the one article that is requested
        $items = \App\Models\Item::find($id);

        // send article to its view
        // return response
        return view('item.show', compact('items'));
    }
    public function create()
    {
        return view ('item.create');
    }

}
