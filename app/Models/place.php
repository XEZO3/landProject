<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    protected $name="place";
    protected $fillable = [
        'ownerName',
        'size',
        'price',
        'phoneNumber',
        'locations_id',
        'streetNumber',
        'streetWide',
        'floor'
    ];

    public function Locations()
    {
        return $this->belongsTo(Locations::class,'locations_id');
    }
}
