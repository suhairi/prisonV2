<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delay extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'setting_id', 'quantity'];

    public function products() {
        return $this->belongsTo(Product::class)
    }
}
