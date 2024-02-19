<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'gambar', 'id_about', 'nama', 'tanggal', 'tempat', 'penyelenggara', 'penjelasan'
    ];
}
