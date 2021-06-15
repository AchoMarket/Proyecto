<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopImage extends Model
{
    use HasFactory;

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    protected $fillable = ['image'];
}
