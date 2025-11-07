<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Artist</title>
</head>
<body>

    <h1>Cadastrar Artista</h1>

    <form action="{{ route('artists.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>            
        </div>

        <div>
            <label for="genre">Genero:</label>
            <input type="text" id="genre" name="genre" required>            
        </div>

        <div>
            <label for="nationality">Nacionalidade:</label>
            <input type="text" id="nationality" name="nationality" required>            
        </div>

        <button type="submit">Salvar</button>
        <a href="{{ route('artists.index') }}">Voltar</a>
    </form>

</body>
</html>
