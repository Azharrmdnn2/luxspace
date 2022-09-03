<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'price', 'description', 'slug'
    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id','id');
    }

    // public function carts()
    // {
    //     return $this->belongsTo(Cart::class, 'products_id','id');
    // }

    // public function transaction_items()
    // {
    //     return $this->belongsTo(TransactionItem::class, 'products_id','id');
    // }
}
