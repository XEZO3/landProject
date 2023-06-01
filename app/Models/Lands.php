<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lands extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ownerName',
        'size',
        'price',
        'phoneNumber',
        'locations_id',
        'aquariumNumber',
        'partNumber',
        'streetNumber',
        'streetWide',
    ];

    public function Locations()
    {
        return $this->belongsTo(Locations::class,'locations_id');
    }
}
