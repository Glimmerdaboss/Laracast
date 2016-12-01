@extends('layouts.layout')
@section('content')
<div class="row">

    <div class="col-md-6 col-md-offset3">
    
    <h1>CARD CARD CARD</h1>

    <ul class="list-group">
        <li class="list-group-item">{{ $card->title }}</li>
    </ul>

    <ul class="list-group">
    @foreach($card->notes as $note)
        <li class="list-group-item">
            {{ $note->body }}

        <a href="#" class="pull-right">
           
             {{$note->user_id}}
            
                
        </a></li>

            

    @endforeach
    
    </ul>

    <hr>

    <h3>Add a new note</h3>

    <form method="POST" action="/fresh/public/pages/cards/{{ $card->id }}/notes">
        {!! csrf_field() !!}
        <div class="form-group">     
            <textarea name="body" class="form-control" rows="10" cols=""></textarea>
        </div>

         <div class="form-group">     
             <button type="submit" class="btn btn-primary">Add note</button>
             <input type="hidden" name="_token" value="{{ Session::token() }}" />
            
        </div>
    </form>
</div>



</div>
@endsection