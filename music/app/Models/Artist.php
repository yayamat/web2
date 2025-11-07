<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'genre', 'nationality'];

    // Relação: Um artista tem muitas músicas
    public function songs()
    {
        return $this->hasMany(Song::class);
    }
}
