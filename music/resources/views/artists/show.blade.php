<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detalhe do Artista</title>
</head>
<body>
    <h1>Detalhe do Artista</h1>

    <p><strong>Name:</strong> {{ $artist->name }}</p>
    <p><strong>Genre:</strong> {{ $artist->genre }}</p>
    <p><strong>Nationality:</strong> {{ $artist->nationality }}</p>

    <a href="{{ route('artists.index') }}">
        <button>Back</button>
    </a>
    <a href="{{ route('artists.edit', $artist->id) }}">
        <button>Edit</button>
    </a>
</body>
</html>
