<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Song</title>
</head>
<body>

    <h1>Edit Song</h1>

    <form action="{{ route('songs.update', $song->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $song->title }}" required>            
        </div>

        <div>
            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" value="{{ $song->duration }}" required>            
        </div>

        <div>
            <label for="artist_id">Artist:</label>
            <select name="artist_id" id="artist_id" required>
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}" 
                        {{ $song->artist_id == $artist->id ? 'selected' : '' }}>
                        {{ $artist->name }}
                    </option>
                @endforeach
            </select>          
        </div>

        <button type="submit">Update Song</button>
        <a href="{{ route('songs.index') }}">Voltar</a>
    </form>

</body>
</html>
