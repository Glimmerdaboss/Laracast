<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = ['body'];

    public function Card()
    {
    return $this->belongsTo(Card::class); //same as App/Card
    }

    public function User()
    {
    return $this->belongsTo(User::class);
    }
   
}
