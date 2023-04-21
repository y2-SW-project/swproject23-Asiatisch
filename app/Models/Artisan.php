<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    public function cheeses()
    {
        return $this->belongsToMany(artisan::class)->withTimestamps();
    }
}
