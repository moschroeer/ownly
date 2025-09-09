<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;


    public function borrower()
    {
        return $this->belongsTo(User::class, 'borrower_id');
    }
    public function rental()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
