<?php

namespace App\Models;

use App\Models\Cheese;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    public function cheeses() {
        return $this->hasMany(Cheese::class);
    }
}
