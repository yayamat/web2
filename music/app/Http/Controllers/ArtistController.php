<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::orderBy('name')->paginate(10);
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'nullable|string|max:100',
            'nationality' => 'nullable|string|max:100',
        ]);

        Artist::create($data);

        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');
    }

    public function show(Artist $artist)
    {
        $artist->load('songs');
        return view('artists.show', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'nullable|string|max:100',
            'nationality' => 'nullable|string|max:100',
        ]);

        $artist->update($data);

        return redirect()->route('artists.index')->with('success', 'Artista atualizado com sucesso!.');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect()->route('artists.index')->with('success', 'Artista deletetado com sucesso!.');
    }
}
