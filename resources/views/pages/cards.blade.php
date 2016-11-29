<h1>CARDS CARDS CARDS</h1>

@foreach($cards as $card)
<ul>
    <li><a href="cards/{{ $card->id }}">{{ $card->title }}</a></li>
</ul>
@endforeach