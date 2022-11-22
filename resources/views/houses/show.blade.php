<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Details</h1>

    <h3>Proprietario: {{ $house->proprietario }}</h3>
    <h3>Richiesta: {{ $house->prezzo }}</h3>
    <p>{{ $house->descrizione }}</p>
    <p>
        @if (isset($house->agent))
            {{ $house->agent->FullName }}
        @else
            <p>Agente non assegnato</p>
        @endif
    </p>
    <a href="{{ route('houses.edit', $house->id) }}">Edit</a>
    <a href="/">Back</a>

    <form action="{{ route('houses.destroy', $house->id) }}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare la house?')">
            ELIMINA
        </button>
    </form>
    <hr>
    @if (count($house->customers) > 0)
        <p>
            Persone che hanno appuntamento:
            @foreach ($house->customers as $appuntamento)
                <br> {{ $appuntamento->Name }}
            @endforeach

        </p>
    @else
        <p>Nessun appuntamento per questa casa</p>
    @endif

</body>

</html>
