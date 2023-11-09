<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitud de Servicios de Creación de Páginas Web</title>
</head>


</html>

<body>

  <h1>Solicitud de Servicios de Creación de Páginas Web</h1>

  <form action="{{ route('contacto.store') }}" method="post"
    onsubmit="return validarFormulario()">

    @csrf

    <!-- Nombre (solo letras) -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" pattern="[A-Za-z\s]+"
      title="Solo letras, sin números ni caracteres especiales"
      required><br><br>

    <!-- Correo Electrónico (formato email) -->
    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="email" required><br><br>

    <!-- Número de Teléfono (solo números) -->
    <label for="telefono">Número de Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" pattern="[0-9]+"
      title="Solo números, sin espacios ni caracteres especiales"><br><br>

    <!-- Nombre de empresa/pyme/emprendimiento (Opcional) -->
    <label for="empresa">Nombre de empresa/pyme/emprendimiento
      (Opcional):</label>
    <input type="text" id="empresa" name="empresa"><br><br>

    <!-- Sitio Web Actual (Opcional) -->
    <label for="sitio_web_actual">Sitio Web Actual (Opcional):</label>
    <input type="url" id="sitio_web_actual" name="sitio_web_actual"><br><br>

    <!-- Tipo de Sitio Web -->
    <label for="tipo_sitio">Tipo de Sitio Web:</label>
    <select id="tipo_sitio" name="tipo_sitio" required>
      <option value="ecommerce">E-commerce</option>
      <option value="blog">Blog</option>
      <option value="informativo">Informativo</option>
      <!-- Agrega más opciones según sea necesario -->
    </select><br><br>

    <!-- Funcionalidades Requeridas (div y nueva funcionalidad) -->
    <label for="funcionalidades">Funcionalidades Requeridas:</label><br>
    <div id="funcionalidades_lista">
      <!-- Aquí se mostrarán las funcionalidades ingresadas -->
    </div>
    <input type="text" id="nueva_funcionalidad" pattern="[a-zA-Z0-9\s]+"
      title="Solo letras y números, sin caracteres especiales">
    <button type="button" onclick="agregarFuncionalidad()">Agregar
      Funcionalidad</button><br><br>

    <!-- Diseño y Estilo Preferido -->
    <label for="estilo_preferido">Diseño y Estilo Preferido:</label><br>
    <textarea id="estilo_preferido" name="estilo_preferido" rows="4"
      cols="50"></textarea><br><br>

    <!-- Comentarios Adicionales o Preguntas (Opcional) -->
    <label for="comentarios">Comentarios Adicionales o Preguntas
      (Opcional):</label><br>
    <textarea id="comentarios" name="comentarios" rows="4" cols="50"
      placeholder="Por favor, proporcione detalles adicionales como su presupuesto, plazo de entrega preferido, o cualquier preferencia de diseño que tenga."></textarea><br><br>

    <p>Al enviar esta solicitud, recibirá un presupuesto en el correo
      electrónico proporcionado.</p>

    <input type="submit" value="Enviar Solicitud">
  </form>

  <script>
    function agregarFuncionalidad() {
      var nuevaFuncionalidad = document.getElementById("nueva_funcionalidad")
        .value;
      if (nuevaFuncionalidad !== "") {
        var listaFuncionalidades = document.getElementById(
          "funcionalidades_lista");
        var nuevaDiv = document.createElement("div");
        nuevaDiv.innerHTML = nuevaFuncionalidad +
          ' <button type="button" onclick="eliminarFuncionalidad(this)">Eliminar</button>';
        listaFuncionalidades.appendChild(nuevaDiv);
        document.getElementById("nueva_funcionalidad").value = "";
      }
    }

    function validarFormulario() {
      var funcionalidades = document.getElementById('funcionalidades_lista')
        .children;
      if (funcionalidades.length === 0) {
        alert('Debes ingresar al menos una funcionalidad');
        return false;
      }
      return true;
    }

    function eliminarFuncionalidad(elemento) {
      elemento.parentElement.remove();
    }
  </script>

</body>

</html>
