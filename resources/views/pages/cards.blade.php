@extends('layouts.layout')
@section('content')

<h1>CARDS CARDS CARDS</h1>

    @foreach($cards as $card)
    <ul class="list-group">
        <li class="list-group-item"><a href="cards/{{ $card->id }}">{{ $card->title }}</a></li>
    </ul>
    @endforeach

@endsection