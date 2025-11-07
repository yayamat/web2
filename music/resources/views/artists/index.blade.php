<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artists</title>
</head>
<body>
    <h1>Artists</h1>

    <a href="{{ route('artists.create') }}">Adicionar Novo Artista</a><br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Nacionalidade</th>
            <th>Ações</th>
        </tr>

        @foreach($artists as $artist)
        <tr>
            <td>{{ $artist->name }}</td>
            <td>{{ $artist->genre }}</td>
            <td>{{ $artist->nationality }}</td>
            <td>
                <a href="{{ route('artists.show', $artist->id) }}">Ver</a> |
                <a href="{{ route('artists.edit', $artist->id) }}">Editar</a> |
                <form action="{{ route('artists.destroy', $artist->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Excluir este artista?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</body>
</html>
