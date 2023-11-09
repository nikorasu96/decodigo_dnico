<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts_tables'; // Asegúrate de que el nombre de la tabla sea correcto
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'empresa',
        'sitio_web_actual',
        'tipo_sitio',
        'funcionalidades',
        'estilo_preferido',
        'comentarios'
    ];
}
