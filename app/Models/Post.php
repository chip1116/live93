<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'comment',
        'store_id',
        'member_id',
        'store_comment'
    ];
    
    public function store() {
        return $this->belongsTo(Store::class);
    }
}
