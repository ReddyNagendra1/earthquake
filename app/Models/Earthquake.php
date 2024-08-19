<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earthquake extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'magnitude', 'location', 'latitude', 'longitude'];

    public function observations()
    {
        return $this->belongsToMany(Observation::class);
    }
}
