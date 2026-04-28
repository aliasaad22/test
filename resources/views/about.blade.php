<x-layout>
<x-card>
    Welcome to our site
</x-card>

</x-layout>
@foreach ($informatie as $item)
    <li>Naam: {{ $item['name'] }}</li>
    <li>Email: {{ $item['mail'] }}</li>
    <li>Leeftijd: {{ $item['age'] }}</li>

    {{-- Age category --}}
    @if ($item['age'] < 12)
        <p>Categorie: Child</p>
    @elseif ($item['age'] < 18)
        <p>Categorie: Teen</p>
    @else
        <p>Categorie: Adult</p>
    @endif

    <hr>
@endforeach
<h2>Debug Array</h2>

<pre>{{ json_encode($informatie, JSON_PRETTY_PRINT) }}</pre>
