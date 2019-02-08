<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wintels extends Model
{
    protected $table = 'wintels';

    protected $fillable = [
        'nombre','ubicacion'
    ];
}
