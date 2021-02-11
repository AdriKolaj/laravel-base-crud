<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'marca',
        'nome',
        'gradazione',
        'prezzo',
        'cl'
    ];
}
