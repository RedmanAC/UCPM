<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    protected $fillable =
        ['name', 'größe'];
}
