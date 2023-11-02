<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de contacto</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  @vite(['resources/css/formulario.css', 'resources/img/logo.png'])
</head>

<body style="background-color: #212121;">
  <main>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt=""
            width="30" height="24" class="d-inline-block align-text-top">
          Bootstrap
        </a>
      </div>
    </nav>

  </main>
  <div class="left">
    <h2> ¿Porque trabajar con nosotros?</h2>
    <p>
      ¿Qué es Lorem Ipsum?

      Lorem Ipsum es simplemente el texto de relleno de las imprentas y
      archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de
      las industrias desde el año 1500, cuando un impresor (N. del T. persona
      que se dedica a la imprenta) desconocido usó una galería de textos y los
      mezcló de tal manera que logró hacer un libro de textos especimen. No
      sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno
      en documentos electrónicos, quedando esencialmente igual al original.
      Fue popularizado en los 60s con la creación de las hojas "Letraset", las
      cuales contenian pasajes de Lorem Ipsum, y más recientemente con
      software de autoedición, como por ejemplo Aldus PageMaker, el cual
      incluye versiones de Lorem Ipsum.
    </p>
  </div>
  <div class="right">
    <form class="" action="/enviar" method="post">
      <section class="form-register">
        <h1>Solicitud</h1>
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
          crossorigin="anonymous"></script>
        <div class="form-controls">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre"
            placeholder="Escriba su Nombre" name="nombre" required>
        </div>
        <div class="form-controls">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email"
            placeholder="Escriba su Email" name="email" required>
        </div>
        <div class="row">
          <div class="form-controls">
            <label for="mensaje">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3"
              placeholder="Escriba su Solicitud" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-dark mt-3">Enviar</button>
          </div>
      </section>
    </form>
  </div>

  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <br>
  <br>


  <footer class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container d-flex justify-content-center">
      <p class="">&copy; <span id="currentYear"></span>
        DeCodigo</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var currentYear = new Date().getFullYear();
      document.getElementById('currentYear').textContent = currentYear;
    });
  </script>
</body>

</html>
