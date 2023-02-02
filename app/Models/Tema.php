<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'anyo',
        'duracion'
    ];

    public function albumes()
    {
        return $this->belongsToMany(Album::class);
    }

    public function artistas()
    {
        return $this->belongsToMany(Artista::class);
    }
}
