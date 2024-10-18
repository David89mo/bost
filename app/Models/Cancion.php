<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;

    protected $table = 'canciones'; // Asegúrate de que este sea el nombre correcto
    protected $fillable = ['nombre', 'artistas', 'album', 'duracion', 'imgportada'];
}

