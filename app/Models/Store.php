<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;


class Store extends Model
{
    use HasFactory;

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
