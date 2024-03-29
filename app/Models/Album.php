<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albumes';

    protected $fillable = [
        'titulo',
        'anyo'
    ];

    public function temas()
    {
        return $this->belongsToMany(Tema::class);
    }
}
