<h1>CARD CARD CARD</h1>

<ul>
    <li>{{ $card->title }}</li>
</ul>

<br><br><br>

<ul>
    @foreach($card->notes as $note)
        <li>{{ $note->body }}</li>
    @endforeach
    
</ul>
