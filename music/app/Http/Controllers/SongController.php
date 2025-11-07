<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Artist;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('artist')->orderBy('title')->paginate(10);
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        $artists = Artist::orderBy('name')->get();
        return view('songs.create', compact('artists'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'nullable|string|max:50',
            'artist_id' => 'required|exists:artists,id',
        ]);

        Song::create($data);

        return redirect()->route('songs.index')->with('success', 'Song created successfully.');
    }

    public function show(Song $song)
    {
        $song->load('artist');
        return view('songs.show', compact('song'));
    }

    public function edit(Song $song)
    {
        $artists = Artist::orderBy('name')->get();
        return view('songs.edit', compact('song', 'artists'));
    }

    public function update(Request $request, Song $song)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'duration' => 'nullable|string|max:50',
            'artist_id' => 'required|exists:artists,id',
        ]);

        $song->update($data);

        return redirect()->route('songs.index')->with('success', 'Song updated successfully.');
    }

    public function destroy(Song $song)
    {
        $song->delete();
        return redirect()->route('songs.index')->with('success', 'Song deleted successfully.');
    }
}
