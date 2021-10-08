<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
  protected $fillable=[
'name',
'typeofmusic',
'about',


  ];


  public function musicalvenus()
    {
        return $this->belongsToMany(MusicalVenus::class, 'shows');

    }
    
}
