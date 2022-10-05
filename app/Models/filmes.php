<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filmes extends Model
{
    use HasFactory;

    protected $table = "filmes";
    protected $fillable = ['titulo', 'indicacao', 'idioma', 'dublado', 'duracao'];
}
