<h1>CARDS CARDS CARDS</h1>

@foreach($cards as $card)
<ul>
    <li>{{ $card->title }}</li>
</ul>
@endforeach