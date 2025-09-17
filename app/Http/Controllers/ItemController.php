<?php

namespace App\Http\Controllers;

use App\Models\Item;
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
    public function store(Request $request)
    {
        $items = \App\Models\Item::create([
            'title'=> $request-> title,
            'description'=> $request->description,
            'owner_id'=> 1,
        ]);

        return redirect() -> route('items.show', $items->id);
    }

}
