<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function Notes()
    {
    return $this->hasmany(Note::class); //same as App/Note
    }
}
