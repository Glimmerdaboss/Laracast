<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PagesController extends Controller
{
    public function letter()
    {
         $letters  = ['A','B','C'];

        return view('pages.letters',['letters'=>$letters]);
    }
    
    public function about()
    {
        return view('pages.about');
    }
}
