<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Songs</title>
</head>
<body>

    <h1>Songs</h1>
    <a href="{{ route('songs.create') }}">Adicionar nova Música</a><br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>Título</th>
            <th>Duração</th>
            <th>Artista</th>
            <th>Acões</th>
        </tr>
        @foreach($songs as $song)
        <tr>
            <td>{{ $song->title }}</td>
            <td>{{ $song->duration }}</td>
            <td>{{ $song->artist->name }}</td>
            <td>
                <a href="{{ route('songs.show', $song->id) }}">Ver</a> |
                <a href="{{ route('songs.edit', $song->id) }}">Editar</a> |
                <form action="{{ route('songs.destroy', $song->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Delete this song?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
