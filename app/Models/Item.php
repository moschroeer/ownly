<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;

    protected $guarded = [];
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function rentals()
    {
        return $this->hasMany(Item::class, 'item_id');
    }
}
