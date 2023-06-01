<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function Lands()
    {
        return $this->hasMany(Lands::class,'locations_id');
    }
    public function place()
    {
        return $this->hasMany(place::class,'locations_id');
    }
}
