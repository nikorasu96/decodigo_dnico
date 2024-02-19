<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    @vite(['resources/css/formulario.css', 'resources/img/logo.png'])
</head>

<body style="">
    <main>
      <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DeCodigo</a>    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#miMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse right-collapse" id="miMenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <main>
          <h1>Solicitud de Servicios</h1>
            <section class="formulario">
                <form action="enviar.php" method="post">
                    <label for="nombre_completo">Nombre completo:</label>
                    <input type="text" id="nombre_completo" name="nombre_completo" required>
                    <label for="correo_electronico">Correo electrónico:</label>
                    <input type="email" id="correo_electronico" name="correo_electronico" required>
                    <label for="numero_telefono">Número de teléfono:</label>
                    <input type="tel" id="numero_telefono" name="numero_telefono" required>
                </form>
            </section>

            <section class="formulario1">
                <form action="enviar.php" method="post">
                    <label for="nombre_empresa">Nombre de empresa:</label>
                    <input type="text" id="nombre_empresa" name="nombre_empresa" required>
                    <label for="sitio_web_actual">Sitio web actual:</label>
                    <input type="url" id="sitio_web_actual" name="sitio_web_actual">
                </form>
            </section>

            <section class="formulario2">
                <form action="enviar.php" method="post">
                    <label for="tipo_sitio">Tipo de sitio:</label>
                    <select name="tipo_sitio">
                        <option value="">Seleccione...</option>
                        <option value="e-commerce">E-commerce</option>
                        <option value="blog">Blog</option>
                        <option value="informativo">Informativo</option>
                    </select>
                    <div class="funcionalidades">
                      <label class="label-funcionalidad" for="funcionalidad">Funcionalidades requeridas:</label>
                      <div class="input-container">
                        <input type="text" id="funcionalidad" name="funcionalidad" placeholder="">
                        <button type="button" class="agregar-funcionalidad">Agregar Funcionalidad</button>
                      </div>
                    </div>
                    <label for="diseno_estilo">Diseño y estilo preferido:</label>
                    <textarea name="diseno_estilo" rows="5" maxlength="1000"></textarea>
                </form>
            </section>

            <section class="formulario3">
                <form action="enviar.php" method="post">
                    <label for="comentarios_preguntas">Comentarios adicionales o preguntas:</label>
                    <textarea name="comentarios_preguntas" rows="5"></textarea>
            </section>

            <p>Al enviar esta solicitud, recibirá un presupuesto en el correo electrónico proporcionado.</p>
            <hr>
            <button type="submit" class="continuar">Continuar</button>
            <button type="button" class="volver">Volver</button>
            </form>
        </main>
        <footer>
            </div>

            <p>&copy; <span id="currentYear"></span> Mi Empresa. Todos los derechos reservados.</p>
        </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentYear = new Date().getFullYear();
        document.getElementById('currentYear').textContent = currentYear;
    });
</script>
</body>

</html>
