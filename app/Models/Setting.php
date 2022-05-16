<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['bulan_tahun', 'lock'];


    public function delays() {
        return $this->hasMany(Delay::class);
    }
    
}
