<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'store_id',
    ];
    protected $table = 'store_category';
}
