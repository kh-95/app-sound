<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicalVenus extends Model
{
    use HasFactory;


    protected $fillable=[

        'name',
        'location',
    ];
    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'shows');

    }
}
