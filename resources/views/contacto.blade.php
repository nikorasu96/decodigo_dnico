<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Contacto</title>
</head>

<body>
  <h1>Contacto</h1>

  @if (session('success'))
    <div style="color: green;">
      {{ session('success') }}
    </div>
  @endif

  <form action="{{ route('contacto.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="comentario">Comentario:</label><br>
    <textarea id="comentario" name="comentario" rows="4" cols="50"
      required></textarea><br>


    <input type="submit" value="Enviar">
  </form>
</body>

</html>