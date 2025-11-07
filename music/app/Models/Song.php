<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'duration', 'artist_id'];

    // Relação: Uma música pertence a um artista
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
