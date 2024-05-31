<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Like;
use App\Models\StoreCategory;
use App\Models\Category;



class Store extends Model
{
    use HasFactory;

    public function location() {
        return $this->belongsTo(Location::class);
    }
    public function like() {
        return $this->hasMany(Like::class);
    }
    public function category() {
        return $this->hasManyThrough(
            Category::class,
            StoreCategory::class,
            'store_id',
            'id',
            'id',
            'category_id'
        );
    }
}
