<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Song</title>
</head>
<body>

    <h1>Cadastrar Song</h1>

    <form action="{{ route('songs.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>            
        </div>

        <div>
            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" placeholder="Ex: 3:45" required>            
        </div>

        <div>
            <label for="artist_id">Artist:</label>
            <select name="artist_id" id="artist_id" required>
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach
            </select>          
        </div>

        <button type="submit">Salvar</button>
        <a href="{{ route('songs.index') }}">Voltar</a>
    </form>

</body>
</html>
