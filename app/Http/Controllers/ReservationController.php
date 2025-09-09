<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        // fetch articles from DB
        $reservations = \App\Models\Reservation::all();

        //dd($articles); // to quickly analyse what you loaded

        // send articles to the view
        // return response
        return view('reservation.index', compact('reservations'));
    }
    public function show($id)
    {
        // fetch the one article that is requested
        $reservations = \App\Models\Reservation::find($id);

        // send article to its view
        // return response
        return view('reservation.show', compact('reservations'));
    }
}
