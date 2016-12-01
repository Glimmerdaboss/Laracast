<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;

class CardsController extends Controller
{
    public function cards()
    {
        $cards = Card::all();

        return view('pages.cards',['cards'=>$cards]);
    }
    
    public function show(Card $card)
    {
        $card->load('notes.user');
        //return view('pages.show',['card'=> $card]);
        return view('pages.show', compact('card'));
    }

    

    
}
