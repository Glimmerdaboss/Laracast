<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {     
    //    $note = new Note;
    //    $note -> body = $request -> body; 
    //    $card->notes()->save($note);
    //    return back();

    $card->addNote( // added a method in Card model.(addNOte)
        new Note($request->all())
        );
        return back(); 
    }

    public function edit(Note $note)
    {
        return view('notes.edit',['note'=>$note]);
    }

    public function update(Request $request, Note $note)
    {
    $note->update($request->all());
        return back();
    }
}