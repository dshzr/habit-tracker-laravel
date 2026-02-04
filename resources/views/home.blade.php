
<h1>
    Olá {{ $name }}!
</h1>

<p>
    <ul>
        @foreach ($habits as $habit)
            <li>{{ $habit }}</li>
        @endforeach
    </ul> 
</p>