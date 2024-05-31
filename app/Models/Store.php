<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Like;


class Store extends Model
{
    use HasFactory;

    public function location() {
        return $this->belongsTo(Location::class);
    }
    public function like() {
        return $this->hasMany(Like::class);
    }
    public function StoreCategory() {
        return $this->hasMany(StoreCategory::class);
}
}
