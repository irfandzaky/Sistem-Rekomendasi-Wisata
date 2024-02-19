<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'nama', 'gambar', 'penjelasan', 'alamat', 'lat', 'lng', 'id_genre'
    ];
}
