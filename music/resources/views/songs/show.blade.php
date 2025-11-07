<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Song Details</title>
</head>
<body>

    <h1>Song Details</h1>

    <p><strong>Title:</strong> {{ $song->title }}</p>
    <p><strong>Duration:</strong> {{ $song->duration }}</p>
    <p><strong>Artist:</strong> {{ $song->artist->name }}</p>

    <a href="{{ route('songs.index') }}">Voltar</a>
    <a href="{{ route('songs.edit', $song->id) }}">Edit</a>

</body>
</html>
