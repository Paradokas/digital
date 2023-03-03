<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collection extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title'];

    public function products()
    {
//        return $this->belongsTo(Product::class);
        return $this->belongsToMany(Product::class);
    }
}
