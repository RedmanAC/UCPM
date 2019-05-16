<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Activity extends Model
{
    protected $fillable = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
