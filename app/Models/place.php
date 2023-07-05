<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    use HasFactory;
    protected $table = 'place';
    protected $fillable = [
        'ownerName',
        'size',
        'price',
        'phoneNumber',
        'locations_id',
        'streetNumber',
        'streetWide',
        'floor',
        'type',
        'rentornot'
    ];

    public function Locations()
    {
        return $this->belongsTo(Locations::class,'locations_id');
    }
}
