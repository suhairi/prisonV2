<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'setting_id'];

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity', 'updated_at', 'created_at');
    }

    public function delays() {
        return $this->belongsToMany(Delay::class)->withPivot('quantity');
    }

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function settings() {
        return $this->belongsTo(Setting::class);
    }


}
