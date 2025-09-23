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
public function edit($id)
    {
    $items= \App\Models\Item::find($id);
    return view('item.edit', compact('items'));
    }
    public function update(Request $request, $id)
    {   //load correct article from model
        $items = \App\Models\Item::find($id);
        //validate the incoming request data
        $request->validate([
            'title' => ['required','string','max:100','min:10'],
            'description' => ['required','string'],
        ]);
        //Update the changes
        $items -> update([
            'title'=> $request -> title,
            'description'=>$request-> description,
        ]);
        return redirect() -> route('items.show', $items->id);
    }

    public function destroy($id)
    {
        $items = \App\Models\Item::find($id);
        $items -> delete();
        return redirect() -> route('items.index');
    }
}
