<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function member() {
        return $this->belongsTo(Member::class);
    }

    public function store() {
        return $this->belongsTo(Store::class);
    }
}
