<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function Card()
    {
    return $this->belongsTo(Card::class); //same as App/Card
    }

    
}
