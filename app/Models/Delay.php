<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delay extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantity'];

    // Product
    public function products() {
        return $this->belongsTo(Product::class);
    }

    // Order
    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
