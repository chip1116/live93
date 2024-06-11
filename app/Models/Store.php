<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Like;
use App\Models\StoreCategory;
use App\Models\Category;
use App\Models\Member;
use App\Models\Post;



class Store extends Model
{
    use HasFactory;
    protected $fillable = [
        'location_id',
        'tel',
        'member_id',
    ];

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
    public function member() {
        return $this->belongsTo(Member::class);
    }
    public function Post() {
        return $this->hasMany(Post::class);
    }
}