@extends('layouts.app')

@section('content')
  <h1>Solicitud de Servicios</h1>

  @endsection

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud de Servicios</title>
</head>


</html>

<body>

  <form action="{{ route('contacto.store') }}" method="post">
    @csrf

    <body>
      <header>
        <h1>Solicitud de Servicios</h1>
      </header>
      <main>
        <section class="formulario">
          <h2>Formulario de contacto</h2>
          <form action="enviar.php" method="post">
            <label for="nombre_completo">Nombre completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" required>
            <label for="correo_electronico">Correo electrónico:</label>
            <input type="email" id="correo_electronico" name="correo_electronico" required>
            <label for="numero_telefono">Número de teléfono:</label>
            <input type="tel" id="numero_telefono" name="numero_telefono" required>
            <label for="nombre_empresa">Nombre de empresa:</label>
            <input type="text" id="nombre_empresa" name="nombre_empresa" required>
            <label for="sitio_web_actual">Sitio web actual:</label>
            <input type="url" id="sitio_web_actual" name="sitio_web_actual">
            <label for="tipo_sitio">Tipo de sitio:</label>
            <select name="tipo_sitio">
              <option value="">Seleccione...</option>
              <option value="e-commerce">E-commerce</option>
              <option value="blog">Blog</option>
              <option value="informativo">Informativo</option>
            </select>
            <div class="funcionalidades">
              <label for="funcionalidad">Funcionalidades requeridas:</label>
              <input type="text" id="funcionalidad" name="funcionalidad" placeholder="Escriba una funcionalidad">
              <button type="button" class="agregar-funcionalidad">Agregar</button>
            </div>
            <label for="diseno_estilo">Diseño y estilo preferido:</label>
            <textarea name="diseno_estilo" rows="5" maxlength="1000"></textarea>
            <label for="comentarios_preguntas">Comentarios adicionales o preguntas:</label>
            <textarea name="comentarios_preguntas" rows="5"></textarea>
            <p>Al enviar esta solicitud, recibirá un presupuesto en el correo electrónico proporcionado.</p>
            <button type="submit" class="continuar">Continuar</button>
            <button type="button" class="volver">Volver</button>
          </form>
        </section>
      </main>
      <footer>
        <p>&copy; 2023 Mi Empresa. Todos los derechos reservados.</p>
      </footer>
    </body>

</body>

</html>
