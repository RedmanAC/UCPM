<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arbeitszeiten extends Model
{
    protected $fillable =
        [ 'von', 'bis', 'pause' ,'mitarbeiternr'];
}
