<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = \App\Models\Item::all();
        return view('item.index', compact('items'));
    }
    public function show($id)
    {

        $items = \App\Models\Item::find($id);
        return view('item.show', compact('items'));
    }
    public function create()
    {
        return view ('item.create');
    }
    public function store(Request $request)
    {   $request->validate([
        'title' => ['required','string','max:100','min:10'],
        'category'=> ['required','string','max:100'],
        'address'=> ['required','string','max:100'],
        'description' => ['required','string'],
    ]);
        $items = \App\Models\Item::create([
            'title'=> $request-> title,
            'category'=> $request -> category,
            'address'=> $request -> address,
            'description'=> $request->description,
            'owner_id'=> auth()->user()->id,
        ]);

        return redirect() -> route('items.show', $items->id);
    }
public function edit($id)
    {
    $items= \App\Models\Item::find($id);
    if (! $items  -> canEditOrDelete(auth()->user())) {
        return redirect() -> route('items.show', ['id'=>$items->id]);
    }
    return view('item.edit', compact('items'));
    }
    public function update(Request $request, $id)
    {   //load correct article from model
        $items = \App\Models\Item::find($id);

        $request->validate([
            'title' => ['required','string','max:100','min:10'],
            'category'=> ['required','string','max:100'],
            'address'=> ['required','string','max:100'],
            'description' => ['required','string'],
        ]);
        //Update the changes
        $items -> update([
            'title'=> $request -> title,
            'category'=> $request -> category,
            'address'=> $request -> address,
            'description'=>$request-> description,
        ]);
        return redirect() -> route('items.show', $items->id);
    }

    public function destroy($id)
    {
        $items = \App\Models\Item::find($id);
        if (! $items -> canEditOrDelete(auth()->user())) {
            return redirect() -> route('items.show', ['id'=>$items->id]);
        }
        $items -> delete();
        return redirect() -> route('items.index');
    }

    }
