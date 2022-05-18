<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status'];

    // Order
    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity', 'created_at', 'updated_at');
    }

    // Delay
    public function delays() {
        return $this->hasMany(Delay::class);
    }
}
