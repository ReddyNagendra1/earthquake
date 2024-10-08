<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'description', 'intensity'];

    public function earthquakes()
    {
        return $this->belongsToMany(Earthquake::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
