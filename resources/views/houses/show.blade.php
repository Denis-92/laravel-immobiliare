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

    <a href="{{ route('houses.edit', $house->id) }}">Edit</a>
    <a href="/">Back</a>
</body>

</html>
