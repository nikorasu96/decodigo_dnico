<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactoController extends Controller
{
  public function index()
  {
    return view('contacto');
  }

  public function create()
  {
      return view('contacto');
  }

  public function store(Request $request)
  {
    // Validar datos
    $validatedData = $request->validate([
      'nombre' => 'required|string|max:255',
      'email' => 'required|email',
      'telefono' => 'required|string|max:255',
      'empresa' => 'required|string|max:255',
      'sitio_web_actual' => 'nullable|url',
      'tipo_sitio' => 'required|string|in:e-commerce,blog,informativo',
      'funcionalidad' => 'nullable|string',
      'estilo_preferido' => 'required|string|max:1000',
      'comentarios' => 'nullable|string',
    ]);

    // Crear nuevo contacto
    $contacto = new Contact();
    $contacto->fill($validatedData); // Ojo, si tus inputs/bd tienen nombres diferentes, setear manualmente

    // Guardar funcionalidades como un array en la base de datos
    $funcionalidades = $request->input('funcionalidad');
    if (!empty($funcionalidades)) {
      $contacto->funcionalidades = json_encode($funcionalidades);
    } else {
      $contacto->funcionalidades = json_encode([]); // O un valor por defecto si es apropiado
    }

    // Guardar el contacto
    $contacto->save();

    // Enviar correo electrónico (opcional)

    // Redirigir a la página de agradecimiento
    return redirect()->route('gracias');
  }
}
